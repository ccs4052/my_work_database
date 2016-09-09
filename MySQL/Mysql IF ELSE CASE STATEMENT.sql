




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





