<?php
/**
 * Created by PhpStorm.
 * User: yae
 * Date: 2019/8/22
 * Time: 15:27
 */
return [
    "SMS" => [
        //主账号
        'accountSid'=>'8a216da86c8a1a54016cb2d2c5201b9d',
        //主账号token
        'accountToken'=>'85b52e60dab642c6b0115dbfb44d9db2',
        //应用id
        'appId'=>'8a216da86c8a1a54016cb2d2c56a1ba3',
        //请求地址
        'serverIP'=>'app.cloopen.com',
        //请求端口
        'serverPort'=>"8883",
        //REST端口号
        'softVersion'=>"2013-12-26"
    ],
    'alipay' => [
        //应用ID,您的APPID。
        'app_id' => "2016101300678589",

        //商户私钥
        'merchant_private_key' => "MIIEpAIBAAKCAQEAyMHoC3sId7VFq8DebhTkU20caWp4a66Av76v2yEQQJhnTH8kkDIlIXnKz+VcyVwCxTta8tCKyMfthyuHBP0Ze7QiT2pT1kP6AlnzDaANzggOauROyK569Ry9Fqf5xJCS4ObikTkiqH7PtW9T19dCec3ANgJp8ALlJpMZ/0z7gR5te1XRLEa4H3eBjKNA76jwv15KtzaDQYCHxqV4SvxlwPs5JTqQ20UmA14tgNu5w4TU7nyRZwRD2WOvqmFx1HNpL5nlOH0UOPDbWIuF6CwESZjIJVkaKzF1wYecfS/o8CW3aAAuX+Qae60fk7B69KtX4Cu+O22rIhLl6LuVlby3dQIDAQABAoIBAFZy0XZoI4xQ3dCI+/9RNcUK/ioStApCmaR3+4gT48i9F/Zj5Z3GSiDxLjl53gvDeFnwJkjbLngpR4pmXvzx9FBFkGS8N5/To8vxae1bF7a512OGLrrSD5aPKomgCbjwPJ9mLPg2L0t5V/4cE3GlezWyOOvI/E9jH8QNoitCviap7F67/+7Haw36HYMXlNHi546A4oTriFy/MQq7jInQ9ahVGep9JptRuertCaGG26/6HCjzN1aRuE7byNiGVgwy4IVjP0u3aI+K1lJIRakAeX3M02KsVRh7xeh199iWpfIncu5vm5QX3OWdulRt6mTl9msQSlKvcUH72/r5fWBBAIECgYEA+weS5pG3xqeEGzlZ5uzxyKoerZgAIVAvd9cv5iIlhafq5Fqdkb4dUfj0VlKxggl7I6XuESkoYU/p0Xg2cm4BthSBztNspn6tlKRllX+30YmZQqYkvtbkk55wprYhsFMYDxmJvaiQsLSCSGUXr80MQ9o1zJL6XtA/EJ/K55m/gNUCgYEAzLuC/okJ4OH5X4wXBBesLSQcvl6u/dIUS7mIylyawX92XMvIaSTBGBiu1Nyus5P+rcNjHEmRw8e7M6vwWxi/3oS7IxzupQ27oDVvevW/IaXu+55JA5ylEhFGXRpszWSbv7Ydc3xN4Tup8pEUzvBtukpHbXZ4Sa9jKx5h8wKGrCECgYEApGj6eo6XqcFPUbFHQ2qOlNluzE1QUIE/BaNnWLemkZo/yp3as3irpWODTAJPBhcFknx7prupGcsIHcw5BMstzb4yom5wq78uGrttWPPURaV0PmWojWEbRd+wck+5Us2pZUJZp2D+mu0uoxGq6NZIISyKrdjZqD2GAHJXp0ZYWZ0CgYEAzH3u1baje0+6+ci/pILQozYSz8NbHoObahejnhzpJqTd4MpbH0pq5FqjJlJW3V/RXlZuxG5nfhodzfrLVPJfky8YjHX1mD8jTV6SP0r+4ekPz5vGaikoZ+eBVLV0P6NiPhb1S8i5MWOa2II5OonDz/MpbRiMBW19rC/ovgWj5oECgYAZFaZ+6TkORxXVUtrApxUDikklscc5vMOidcXFMsePsjMxho6V7VRydoFgpXRC0B0te0oeVK0jL0P5qS2osnPRaBO1ZjK0q1Px61jzdLlyn+y5YhXLO2M03Yvk6EJKQGAK+qEDdtSFlQhcutkErFyi7mbCUpZqnVffW/r46MsVgA==",

        //异步通知地址
        'notify_url' => "http://yaesh.free.idcfengye.com/index/alipay/notify_url",

        //同步跳转
        'return_url' => "http://yaesh.free.idcfengye.com/index/alipay/return_url",

        //编码格式
        'charset' => "UTF-8",

        //签名方式
        'sign_type'=>"RSA2",

        //支付宝网关
        'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

        //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
        'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqHI/SPmv0oQTzDN4cLioP6d0QdHXNdN/lmBvnQL/kjvoabHX0YHG4s3yo/ELeny1DcxZtr42a2//6j4VbTA2RB4CAIBh2m3HpZ1f+1yYxfViRqEn8JpcudyIYHIfH+0HRX8oGJ4qO9zYEM/b/cGoK7yMiLKhhZ6py4NRDCqxTVKH22vd6oCZyEsJX2nlNPcuhRQdDvjl6l25+vOLCLTnmGUZcASEvTkbh+ZASkKrAOOWBTUdHvSBjTvGySoGT6HAbY3Jzxcx4G1qOJTqMwKCMx5XF8WMKAtcEQAHHbL2+aVr8/4bdBdw+m38fWd8H3Mkv9Lv6+Y9P5E6f7GmhrZvyQIDAQAB
",
    ]
];