

Distent from store to people 

Где цифры это данные которые приходят от пользователя и выдим растояние его до магазина например  clout_v1_3.stores.latitude

SELECT min(distance)
FROM (SELECT clout_v1_3.stores.latitude, clout_v1_3.stores.longitude, SQRT(
    POW(69.1 * (clout_v1_3.stores.latitude - 66.678), 2) +
    POW(69.1 * (-67.789 - clout_v1_3.stores.longitude) * COS(clout_v1_3.stores.latitude / 57.3), 2)) AS distance
FROM clout_v1_3.stores where clout_v1_3.stores.id = 1) AS distance_count