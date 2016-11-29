

СОЗДАНИЕ ФУНКЦИЙ 


DELIMITER $$


CREATE DEFINER=`root`@`localhost` FUNCTION clout_v1_3.active(`user_id` INT) RETURNS text CHARSET utf8
RETURN (SELECT case when (SELECT clout_v1_3cron.store_schedule.reservation_status FROM clout_v1_3cron.store_schedule where clout_v1_3cron.store_schedule._user_id = user_id GROUP BY clout_v1_3cron.store_schedule._user_id) IS NULL 
            then (SELECT if(clout_v1_3.user_geo_tracking.source = 'checkin','Here now',null) FROM clout_v1_3.user_geo_tracking WHERE clout_v1_3.user_geo_tracking._user_id = user_id GROUP BY clout_v1_3.user_geo_tracking._user_id)
            else clout_v1_3cron.store_schedule.reservation_status
            end
from clout_v1_3cron.store_schedule GROUP BY clout_v1_3cron.store_schedule._user_id)$$


DELIMITER ;