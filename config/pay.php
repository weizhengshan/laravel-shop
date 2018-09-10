<?php

return [
    'alipay' => [
        'app_id'         => '2016091700531435',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4EqlGnmlaGyPGnJGjwUaWxiw0vSrpHushjP1DSe5M1gp4W6JoT5KEvjXJCBNz5uj98a3F6ZOuX21ZPYw9EbJZy0KPsrSpqU0d5u527Vm3TDrotI+xGtSfe5UI6eDs5FRpE36Vxq02N6Jpp7ROZYb4Ald8p7jYeHVmwugHUktayXku7LZaTufkHTkmtW2KNLGA701dH8di7sg3rdzvK1s0dB0VCOuO7VKieRdjoczhCgCrQqQpEp1KH/xn2uCd7uJfH607IqTpgoB+nAW6mYMZmYMwOALEFyFGkmsadXcO6e98FSZm4D10Rx1AKkzRrNbNYfxJnm2He22iWDtsaRLAQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAsG4BobmNCxqN9aEUrGrCZGXcG7We8lv9VnjGgvho0tJHodrjev3epmTA2nNrvexk1ErecdzuKFOkYo8F5fKCNo+dgBhnH/T1/z6Sb65B1EJ9Nar5ULxsmQWKWaqbbm2WYYoOWHS7WFlDhqr/k/fJb2vPb8zRCblGSjH/QOxIA/H5VFX7igjABO3I0tIgVPBgoMEiTo8nHeT4Du/wOFmFN4UJ2bRvDap2BqxwIZRqlYPz6dMefWGUUwVTaKBy0BQ1OGhtgYb3flO3O1TaE6fNdzry+hvD6xY81kxVGgQCJzbyOKEBUj2K2Vp7aGXib1Q+UGWYJMcR8z6AEiEzZ0/1yQIDAQABAoIBADziOX3t4lZqm4KgS9oUHXE4FXUaf/dy90HX++lGgCYAmuen+ch/w034hvTbz9qCsWjxTUJN04HnG1tHr+lifr0FYnzJ7wyAJEQo+6++msj9COh0UAUkgPVtjAjVbz30Y2jVk43C+sPKShs292vAnqrssXELZTfN0AvapRNqdo+lZorf4mh5S5KgZoNLQmBEQiwznwvs4/C5vrMgOcqUm0ykJsJ/1+2kUOXqy6ku6gbEwRuf9Lb3ew0GUF8U9DPXNh2vS1UX2zMI8VQh4kqs0tG6Yd1cXYln6hy9T20jw7YEM7KrSRVcYyTarpUmbBA45ZeGtP/bDGmRp7pGVdISKAECgYEA18DV+kORhBugjTivDnniE3V1/kfjvLP/UXNrtJYKpdarBudofsvdkDN4ZxzwDe/7Do/8iBpBNTNVW9l1Wk+cNxvHXIZueAi9rdzwSaZcEwWUmJCcjRXUaMGWYS3raCGmygp7g8JMpkwj4404zbI+RGjacE0rdZbj+M0rUdj1XWECgYEA0VdMa0/ARDKydffuqiFAcQYZqSXGrKL5IHCa/0rZiW1aviPBc65rNH4KFxmH+1NqMvPcYQ/y+wJU/QWlII1hJojfRC99vEegrDhp7L3mbNq5yCsIpPk8iVHuxkEumNMIwd2QTaay8nurjUNZQh9IQlgOI1SqDSP1opKWnaKMSWkCgYBS4alRspM8BMDwf04AaaIHh6AERumdnCgAyi4d+WWtv4GD7XGfBAHhW2RteBhfwkjXl0iToEJchZPM7QS/5MVGBk3XpWzaf8EeATntkRLd287xrNv29uPaOkPioRlFr2e7RbudKg7381f2GlIv8sEo1n7TlVGUopqBAZAaqRXZAQKBgQCBclb54IXGZgb+dYJqR0d+3EPP2WEh7WDZk2f0xwb/ONSs0JVWABugiPOaVxpD6c+4lBzJFECuwEFneC8kkufpGSfeFPPOEgijlfrB/qdW1mWdBidBRDEPxM8+Xp3+uDgpEOWjbpom4RwyrNurzIY1KBgN9tN0brD8h2KFNTdESQKBgHG7iUaZDCoD4DCroJvsNCoHllru2cu3wL9/8GCoHzF7Z1WPDh1r864a0MvsRHg4l7t/4k3DPynPQEYO5DTqAuFt5KEsp5iiO1ked7Xse+atW7IzWWIOuPAVoacbPrduS4oFCWu8u1KgRHeqlG+Zj4PNiZhGmzjmRcQTkiubdDRh',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];