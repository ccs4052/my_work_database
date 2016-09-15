




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





