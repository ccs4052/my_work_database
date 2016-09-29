




Query by if and case



-----------------------------
-----------------------------
В зависимости от поля clout_v1_3cron.store_schedule.status возвращаем цифру если в таблице не находит значение ( IFNULL()) то возвращаем цифру 4_


SELECT IFNULL( (SELECT
                  
                    (CASE 
				        WHEN clout_v1_3cron.store_schedule.status = 'active' and date(clout_v1_3cron.store_schedule.schedule_date) = date(now()) THEN '1'
				        WHEN clout_v1_3cron.store_schedule.status = 'active' and date(clout_v1_3cron.store_schedule.schedule_date) < date(now()) THEN '2'
				        WHEN clout_v1_3cron.store_schedule.status = 'confirmed' and date(clout_v1_3cron.store_schedule.schedule_date) < date(now()) THEN '3'
				        ELSE 4
				    END)
FROM clout_v1_3cron.store_schedule where clout_v1_3cron.store_schedule._user_id = 1 ) ,4) 





--------------------------IF QUERY AND ORDER BY PRIORITY 


SELECT id AS bank_id, institution_name AS bank_name, logo_url, institution_code AS bank_code, 

	IF(institution_name = '1199 SEIU FCU (New York, NY)', 1,
	IF(institution_name LIKE CONCAT('1199 SEIU FCU (New York, NY)','%'), 2, 
	IF(institution_name LIKE CONCAT('%','1199 SEIU FCU (New York, NY)','%'), 3, 
	IF(institution_name LIKE CONCAT('%','1199 SEIU FCU (New York, NY)'), 4, 
	5)))) AS priority

FROM banks 
WHERE is_featured IN ('N') 
AND institution_code <> ''
ORDER BY priority, LENGTH(institution_name) 
LIMIT 5






--------------------------------- Если результат одного селектора не NULL то Выполняеться следующее условие и так 3 Условия в Одном запросе

SELECT (case when (SELECT clout_v1_3.user_geo_tracking.source FROM clout_v1_3.user_geo_tracking
                  
               	
            where clout_v1_3.user_geo_tracking._user_id = user_id and clout_v1_3.user_geo_tracking.source = 'checkin' GROUP BY clout_v1_3.user_geo_tracking._user_id ) IS NULL
           
            then NULL
            else (case when (SELECT clout_v1_3cron.promotions.id FROM clout_v1_3cron.promotions WHERE clout_v1_3cron.promotions.owner_id = user_id and clout_v1_3cron.promotions.promotion_type='perk' GROUP BY clout_v1_3cron.promotions.owner_id) IS NULL
            		then (SELECT CONCAT(clout_v1_3.user_geo_tracking.tracking_time, '|', 'no_perk') FROM clout_v1_3.user_geo_tracking WHERE clout_v1_3.user_geo_tracking._user_id = user_id GROUP BY clout_v1_3.user_geo_tracking._user_id)
            		else 
						(case when (SELECT clout_v1_3cron.promotions.id FROM clout_v1_3cron.promotions WHERE clout_v1_3cron.promotions.owner_id = user_id and clout_v1_3cron.promotions.promotion_type='perk' and clout_v1_3cron.promotions.status <> 'active' GROUP BY clout_v1_3cron.promotions.owner_id) IS NULL
            			then (SELECT CONCAT(clout_v1_3.user_geo_tracking.tracking_time, '|', 'perk_active') FROM clout_v1_3.user_geo_tracking WHERE clout_v1_3.user_geo_tracking._user_id = user_id GROUP BY clout_v1_3.user_geo_tracking._user_id)
            			else (SELECT CONCAT(clout_v1_3.user_geo_tracking.tracking_time, '|', 'perk_not_active') FROM clout_v1_3.user_geo_tracking WHERE clout_v1_3.user_geo_tracking._user_id = user_id GROUP BY clout_v1_3.user_geo_tracking._user_id)
            			end)
            		end)
            end) as here_now_clock




