# 次日留存()

获取参数： 创建时间（年月日） 

SELECT charguid,FROM_UNIXTIME(b.create_time) AS "注册时间",FROM_UNIXTIME(b.lastin) as "最后登录时间" FROM nova_behind b WHERE date(FROM_UNIXTIME(b.create_time)) = '2013-11-20' 
AND date(FROM_UNIXTIME(b.lastin)) = '2013-11-21' GROUP BY charguid ;



# 三日留存()

获取参数：当天时间（年月日） 后推的第三天时间（年月日）

SELECT charguid,FROM_UNIXTIME(b.create_time) AS "注册时间",FROM_UNIXTIME(b.lastin) as "最后登录时间" FROM nova_behind b WHERE date(FROM_UNIXTIME(b.create_time)) = '2013-11-18' 
AND  date(FROM_UNIXTIME(b.lastin)) > '2013-11-18' AND date(FROM_UNIXTIME(b.lastin)) < '2013-11-21'  GROUP BY charguid  ;


# 七日留存()



获取参数：当天时间（年月日） 后推的第七天时间（年月日）

eg:
SELECT charguid,FROM_UNIXTIME(b.create_time) AS "注册时间",FROM_UNIXTIME(b.lastin) as "最后登录时间" FROM nova_behind b WHERE date(FROM_UNIXTIME(b.create_time)) = '2013-11-18' 
AND  date(FROM_UNIXTIME(b.lastin)) > '2013-11-18' AND date(FROM_UNIXTIME(b.lastin)) < '2013-11-25'  GROUP BY charguid  ;


