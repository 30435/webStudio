# ��������()

��ȡ������ ����ʱ�䣨�����գ� 

SELECT charguid,FROM_UNIXTIME(b.create_time) AS "ע��ʱ��",FROM_UNIXTIME(b.lastin) as "����¼ʱ��" FROM nova_behind b WHERE date(FROM_UNIXTIME(b.create_time)) = '2013-11-20' 
AND date(FROM_UNIXTIME(b.lastin)) = '2013-11-21' GROUP BY charguid ;



# ��������()

��ȡ����������ʱ�䣨�����գ� ���Ƶĵ�����ʱ�䣨�����գ�

SELECT charguid,FROM_UNIXTIME(b.create_time) AS "ע��ʱ��",FROM_UNIXTIME(b.lastin) as "����¼ʱ��" FROM nova_behind b WHERE date(FROM_UNIXTIME(b.create_time)) = '2013-11-18' 
AND  date(FROM_UNIXTIME(b.lastin)) > '2013-11-18' AND date(FROM_UNIXTIME(b.lastin)) < '2013-11-21'  GROUP BY charguid  ;


# ��������()



��ȡ����������ʱ�䣨�����գ� ���Ƶĵ�����ʱ�䣨�����գ�

eg:
SELECT charguid,FROM_UNIXTIME(b.create_time) AS "ע��ʱ��",FROM_UNIXTIME(b.lastin) as "����¼ʱ��" FROM nova_behind b WHERE date(FROM_UNIXTIME(b.create_time)) = '2013-11-18' 
AND  date(FROM_UNIXTIME(b.lastin)) > '2013-11-18' AND date(FROM_UNIXTIME(b.lastin)) < '2013-11-25'  GROUP BY charguid  ;


