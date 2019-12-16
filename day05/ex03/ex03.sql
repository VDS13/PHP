INSERT INTO ft_table (`login`, `creation_date`, `group`)
SELECT `last_name` AS `login`, `birthdate` AS `creation_date`, 'other' AS `group` FROM user_card
WHERE LENGTH(last_name)<9 AND `last_name` LIKE '%a%' ORDER BY `last_name` ASC LIMIT 10;