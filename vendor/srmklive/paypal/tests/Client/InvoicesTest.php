<?php

namespace Srmklive\PayPal\Tests\Client;

use PHPUnit\Framework\TestCase;
use Srmklive\PayPal\Tests\MockClientClasses;

class InvoicesTest extends TestCase
{
    use MockClientClasses;

    /** @test */
    public function it_can_generate_unique_invoice_number()
    {
        $expectedResponse = \GuzzleHttp\json_decode('{
  "invoice_number": "ee0044"
}', true);

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/generate-next-invoice-number';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_create_a_draft_invoice()
    {
        $expectedResponse = \GuzzleHttp\json_decode('{
  "id": "INV2-Z56S-5LLA-Q52L-CPZ5",
  "status": "DRAFT",
  "detail": {
    "invoice_number": "#123",
    "reference": "deal-ref",
    "invoice_date": "2018-11-12",
    "currency_code": "USD",
    "note": "Thank you for your business.",
    "term": "No refunds after 30 days.",
    "memo": "This is a long contract",
    "payment_term": {
      "term_type": "NET_10",
      "due_date": "2018-11-22"
    },
    "metadata": {
      "create_time": "2018-11-12T08:00:20Z",
      "recipient_view_url": "https://www.api.paypal.com/invoice/p#Z56S5LLAQ52LCPZ5",
      "invoicer_view_url": "https://www.api.paypal.com/invoice/details/INV2-Z56S-5LLA-Q52L-CPZ5"
    }
  },
  "invoicer": {
    "name": {
      "given_name": "David",
      "surname": "Larusso"
    },
    "address": {
      "address_line_1": "1234 First Street",
      "address_line_2": "337673 Hillside Court",
      "admin_area_2": "Anytown",
      "admin_area_1": "CA",
      "postal_code": "98765",
      "country_code": "US"
    },
    "email_address": "merchant@example.com",
    "phones": [
      {
        "country_code": "001",
        "national_number": "4085551234",
        "phone_type": "MOBILE"
      }
    ],
    "website": "https://example.com",
    "tax_id": "ABcNkWSfb5ICTt73nD3QON1fnnpgNKBy-Jb5SeuGj185MNNw6g",
    "logo_url": "https://example.com/logo.PNG",
    "additional_notes": "2-4"
  },
  "primary_recipients": [
    {
      "billing_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        },
        "email_address": "bill-me@example.com",
        "phones": [
          {
            "country_code": "001",
            "national_number": "4884551234",
            "phone_type": "HOME"
          }
        ],
        "additional_info_value": "add-info"
      },
      "shipping_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        }
      }
    }
  ],
  "items": [
    {
      "name": "Yoga Mat",
      "description": "Elastic mat to practice yoga.",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "50.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "3.27"
        }
      },
      "discount": {
        "percent": "5",
        "amount": {
          "currency_code": "USD",
          "value": "2.5"
        }
      },
      "unit_of_measure": "QUANTITY"
    },
    {
      "name": "Yoga T Shirt",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "10.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "0.34"
        }
      },
      "discount": {
        "amount": {
          "currency_code": "USD",
          "value": "5.00"
        }
      },
      "unit_of_measure": "QUANTITY"
    }
  ],
  "configuration": {
    "partial_payment": {
      "allow_partial_payment": true,
      "minimum_amount_due": {
        "currency_code": "USD",
        "value": "20.00"
      }
    },
    "allow_tip": true,
    "tax_calculated_after_discount": true,
    "tax_inclusive": false,
    "template_id": "TEMP-19V05281TU309413B"
  },
  "amount": {
    "currency_code": "USD",
    "value": "74.21",
    "breakdown": {
      "item_total": {
        "currency_code": "USD",
        "value": "60.00"
      },
      "custom": {
        "label": "Packing Charges",
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        }
      },
      "shipping": {
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        },
        "tax": {
          "name": "Sales Tax",
          "percent": "7.25",
          "amount": {
            "currency_code": "USD",
            "value": "0.73"
          }
        }
      },
      "discount": {
        "item_discount": {
          "currency_code": "USD",
          "value": "-7.50"
        },
        "invoice_discount": {
          "percent": "5",
          "amount": {
            "currency_code": "USD",
            "value": "-2.63"
          }
        }
      },
      "tax_total": {
        "currency_code": "USD",
        "value": "4.34"
      }
    }
  },
  "due_amount": {
    "currency_code": "USD",
    "value": "74.21"
  },
  "links": [
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
      "rel": "self",
      "method": "GET"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/send",
      "rel": "send",
      "method": "POST"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/update",
      "rel": "replace",
      "method": "PUT"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
      "rel": "delete",
      "method": "DELETE"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/payments",
      "rel": "record-payment",
      "method": "POST"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/generate-qr-code",
      "rel": "qr-code",
      "method": "POST"
    }
  ]
}', true);

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "detail": {
    "invoice_number": "#123",
    "reference": "deal-ref",
    "invoice_date": "2018-11-12",
    "currency_code": "USD",
    "note": "Thank you for your business.",
    "term": "No refunds after 30 days.",
    "memo": "This is a long contract",
    "payment_term": {
      "term_type": "NET_10",
      "due_date": "2018-11-22"
    }
  },
  "invoicer": {
    "name": {
      "given_name": "David",
      "surname": "Larusso"
    },
    "address": {
      "address_line_1": "1234 First Street",
      "address_line_2": "337673 Hillside Court",
      "admin_area_2": "Anytown",
      "admin_area_1": "CA",
      "postal_code": "98765",
      "country_code": "US"
    },
    "email_address": "merchant@example.com",
    "phones": [
      {
        "country_code": "001",
        "national_number": "4085551234",
        "phone_type": "MOBILE"
      }
    ],
    "website": "www.test.com",
    "tax_id": "ABcNkWSfb5ICTt73nD3QON1fnnpgNKBy- Jb5SeuGj185MNNw6g",
    "logo_url": "https://example.com/logo.PNG",
    "additional_notes": "2-4"
  },
  "primary_recipients": [
    {
      "billing_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        },
        "email_address": "bill-me@example.com",
        "phones": [
          {
            "country_code": "001",
            "national_number": "4884551234",
            "phone_type": "HOME"
          }
        ],
        "additional_info_value": "add-info"
      },
      "shipping_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        }
      }
    }
  ],
  "items": [
    {
      "name": "Yoga Mat",
      "description": "Elastic mat to practice yoga.",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "50.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25"
      },
      "discount": {
        "percent": "5"
      },
      "unit_of_measure": "QUANTITY"
    },
    {
      "name": "Yoga t-shirt",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "10.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25"
      },
      "discount": {
        "amount": {
          "currency_code": "USD",
          "value": "5.00"
        }
      },
      "unit_of_measure": "QUANTITY"
    }
  ],
  "configuration": {
    "partial_payment": {
      "allow_partial_payment": true,
      "minimum_amount_due": {
        "currency_code": "USD",
        "value": "20.00"
      }
    },
    "allow_tip": true,
    "tax_calculated_after_discount": true,
    "tax_inclusive": false,
    "template_id": "TEMP-19V05281TU309413B"
  },
  "amount": {
    "breakdown": {
      "custom": {
        "label": "Packing Charges",
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        }
      },
      "shipping": {
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        },
        "tax": {
          "name": "Sales Tax",
          "percent": "7.25"
        }
      },
      "discount": {
        "invoice_discount": {
          "percent": "5"
        }
      }
    }
  }
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_list_current_invoices()
    {
        $expectedResponse = \GuzzleHttp\json_decode('{
  "total_items": 2,
  "total_pages": 1,
  "items": [
    {
      "id": "INV2-Z56S-5LLA-Q52L-CPZ5",
      "status": "DRAFT",
      "detail": {
        "invoice_number": "#123",
        "reference": "deal-ref",
        "invoice_date": "2018-11-12",
        "currency_code": "USD",
        "note": "Thank you for your business.",
        "term": "No refunds after 30 days.",
        "memo": "This is a long contract",
        "payment_term": {
          "term_type": "NET_10",
          "due_date": "2018-11-22"
        },
        "metadata": {
          "create_time": "2018-11-12T08:00:20Z",
          "recipient_view_url": "https://www.paypal.com/invoice/p/#Z56S5LLAQ52LCPZ5",
          "invoicer_view_url": "https://www.paypal.com/invoice/details/INV2-Z56S-5LLA-Q52L-CPZ5"
        }
      },
      "invoicer": {
        "email_address": "merchant@example.com"
      },
      "primary_recipients": [
        {
          "billing_info": {
            "email_address": "bill-me@example.com"
          }
        }
      ],
      "amount": {
        "currency_code": "USD",
        "value": "74.21"
      },
      "links": [
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
          "rel": "self",
          "method": "GET"
        },
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/send",
          "rel": "send",
          "method": "POST"
        },
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
          "rel": "replace",
          "method": "PUT"
        },
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
          "rel": "delete",
          "method": "DELETE"
        }
      ]
    },
    {
      "id": "INV2-NP6M-C9A8-ZBDA-3TEX",
      "status": "SCHEDULED",
      "detail": {
        "invoice_number": "0001",
        "invoice_date": "2018-05-14",
        "currency_code": "USD",
        "payment_term": {
          "due_date": "2018-05-15"
        },
        "metadata": {
          "create_time": "2018-05-15T17:24:12Z"
        }
      },
      "invoicer": {
        "email_address": "merchant@example.com"
      },
      "primary_recipients": [
        {
          "billing_info": {
            "email_address": "recipient@example.com"
          }
        }
      ],
      "amount": {
        "currency_code": "USD",
        "value": "32.00"
      },
      "links": [
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-NP6M-C9A8-ZBDA-3TEX",
          "rel": "self",
          "method": "GET"
        },
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-NP6M-C9A8-ZBDA-3TEX",
          "rel": "replace",
          "method": "PUT"
        },
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-NP6M-C9A8-ZBDA-3TEX",
          "rel": "delete",
          "method": "DELETE"
        },
        {
          "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-NP6M-C9A8-ZBDA-3TEX/payments",
          "rel": "record-payment",
          "method": "POST"
        }
      ]
    }
  ],
  "links": [
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices?page=1&page_size=20&total_required=false",
      "rel": "self",
      "method": "GET"
    }
  ]
}', true);

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices?total_required=true';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'get');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->get($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_delete_an_invoice()
    {
        $expectedResponse = '';

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'delete');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->delete($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_update_an_invoice()
    {
        $expectedResponse = \GuzzleHttp\json_decode('{
  "id": "INV2-C82X-JNN9-Y6S5-CNXW",
  "status": "DRAFT",
  "detail": {
    "invoice_number": "#123",
    "reference": "deal-refernce-update",
    "invoice_date": "2018-11-12",
    "currency_code": "USD",
    "note": "Thank you for your business.",
    "term": "No refunds after 30 days.",
    "memo": "This is a long contract",
    "payment_term": {
      "term_type": "NET_10",
      "due_date": "2018-11-22"
    },
    "metadata": {
      "create_time": "2018-11-12T08:00:20Z",
      "recipient_view_url": "https://www.api.paypal.com/invoice/p#Z56S5LLAQ52LCPZ5",
      "invoicer_view_url": "https://www.api.paypal.com/invoice/details/INV2-Z56S-5LLA-Q52L-CPZ5"
    }
  },
  "invoicer": {
    "name": {
      "given_name": "David",
      "surname": "Larusso"
    },
    "address": {
      "address_line_1": "1234 First Street",
      "address_line_2": "337673 Hillside Court",
      "admin_area_2": "Anytown",
      "admin_area_1": "CA",
      "postal_code": "98765",
      "country_code": "US"
    },
    "email_address": "merchant@example.com",
    "phones": [
      {
        "country_code": "001",
        "national_number": "4085551234",
        "phone_type": "MOBILE"
      }
    ],
    "website": "https://example.com",
    "tax_id": "ABcNkWSfb5ICTt73nD3QON1fnnpgNKBy-Jb5SeuGj185MNNw6g",
    "logo_url": "https://example.com/logo.PNG",
    "additional_notes": "2-4"
  },
  "primary_recipients": [
    {
      "billing_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        },
        "email_address": "bill-me@example.com",
        "phones": [
          {
            "country_code": "001",
            "national_number": "4884551234",
            "phone_type": "HOME"
          }
        ],
        "additional_info_value": "add-info"
      },
      "shipping_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        }
      }
    }
  ],
  "items": [
    {
      "name": "Yoga Mat",
      "description": "Elastic mat to practice yoga.",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "50.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "3.27"
        }
      },
      "discount": {
        "percent": "5",
        "amount": {
          "currency_code": "USD",
          "value": "2.5"
        }
      },
      "unit_of_measure": "QUANTITY"
    },
    {
      "name": "Yoga t-shirt",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "10.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "0.34"
        }
      },
      "discount": {
        "amount": {
          "currency_code": "USD",
          "value": "5.00"
        }
      },
      "unit_of_measure": "QUANTITY"
    }
  ],
  "configuration": {
    "partial_payment": {
      "allow_partial_payment": true,
      "minimum_amount_due": {
        "currency_code": "USD",
        "value": "20.00"
      }
    },
    "allow_tip": true,
    "tax_calculated_after_discount": true,
    "tax_inclusive": false,
    "template_id": "TEMP-19V05281TU309413B"
  },
  "amount": {
    "currency_code": "USD",
    "value": "74.21",
    "breakdown": {
      "item_total": {
        "currency_code": "USD",
        "value": "60.00"
      },
      "custom": {
        "label": "Packing Charges",
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        }
      },
      "shipping": {
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        },
        "tax": {
          "name": "Sales Tax",
          "percent": "7.25",
          "amount": {
            "currency_code": "USD",
            "value": "0.73"
          }
        }
      },
      "discount": {
        "item_discount": {
          "currency_code": "USD",
          "value": "-7.50"
        },
        "invoice_discount": {
          "percent": "5",
          "amount": {
            "currency_code": "USD",
            "value": "-2.63"
          }
        }
      },
      "tax_total": {
        "currency_code": "USD",
        "value": "4.34"
      }
    }
  },
  "due_amount": {
    "currency_code": "USD",
    "value": "74.21"
  },
  "links": [
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
      "rel": "self",
      "method": "GET"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/send",
      "rel": "send",
      "method": "POST"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/update",
      "rel": "replace",
      "method": "PUT"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
      "rel": "delete",
      "method": "DELETE"
    }
  ]
}', true);

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "id": "INV2-C82X-JNN9-Y6S5-CNXW",
  "status": "DRAFT",
  "detail": {
    "invoice_number": "#123",
    "reference": "deal-refernce-update",
    "invoice_date": "2018-11-12",
    "currency_code": "USD",
    "note": "Thank you for your business.",
    "term": "No refunds after 30 days.",
    "memo": "This is a long contract",
    "payment_term": {
      "term_type": "NET_10",
      "due_date": "2018-11-22"
    }
  },
  "invoicer": {
    "name": {
      "given_name": "David",
      "surname": "Larusso"
    },
    "address": {
      "address_line_1": "1234 First Street",
      "address_line_2": "337673 Hillside Court",
      "admin_area_2": "Anytown",
      "admin_area_1": "CA",
      "postal_code": "98765",
      "country_code": "US"
    },
    "email_address": "merchant@example.com",
    "phones": [
      {
        "country_code": "001",
        "national_number": "4085551234",
        "phone_type": "MOBILE"
      }
    ],
    "website": "www.test.com",
    "tax_id": "ABcNkWSfb5ICTt73nD3QON1fnnpgNKBy-Jb5SeuGj185MNNw6g",
    "logo_url": "https://example.com/logo.PNG",
    "additional_notes": "2-4"
  },
  "primary_recipients": [
    {
      "billing_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        },
        "email_address": "bill-me@example.com",
        "phones": [
          {
            "country_code": "001",
            "national_number": "4884551234",
            "phone_type": "HOME"
          }
        ],
        "additional_info_value": "add-info"
      },
      "shipping_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        }
      }
    }
  ],
  "items": [
    {
      "name": "Yoga Mat",
      "description": "Elastic mat to practice yoga.",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "50.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "3.27"
        }
      },
      "discount": {
        "percent": "5",
        "amount": {
          "currency_code": "USD",
          "value": "2.5"
        }
      },
      "unit_of_measure": "QUANTITY"
    },
    {
      "name": "Yoga t-shirt",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "10.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "0.34"
        }
      },
      "discount": {
        "amount": {
          "currency_code": "USD",
          "value": "5.00"
        }
      },
      "unit_of_measure": "QUANTITY"
    }
  ],
  "configuration": {
    "partial_payment": {
      "allow_partial_payment": true,
      "minimum_amount_due": {
        "currency_code": "USD",
        "value": "20.00"
      }
    },
    "allow_tip": true,
    "tax_calculated_after_discount": true,
    "tax_inclusive": false,
    "template_id": "TEMP-19V05281TU309413B"
  },
  "amount": {
    "currency_code": "USD",
    "value": "74.21",
    "breakdown": {
      "item_total": {
        "currency_code": "USD",
        "value": "60.00"
      },
      "custom": {
        "label": "Packing Charges",
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        }
      },
      "shipping": {
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        },
        "tax": {
          "name": "Sales Tax",
          "percent": "7.25",
          "amount": {
            "currency_code": "USD",
            "value": "0.73"
          }
        }
      },
      "discount": {
        "item_discount": {
          "currency_code": "USD",
          "value": "-7.50"
        },
        "invoice_discount": {
          "percent": "5",
          "amount": {
            "currency_code": "USD",
            "value": "-2.63"
          }
        }
      },
      "tax_total": {
        "currency_code": "USD",
        "value": "4.34"
      }
    }
  }
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'put');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->put($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_show_details_for_an_invoice()
    {
        $expectedResponse = \GuzzleHttp\json_decode('{
  "id": "INV2-Z56S-5LLA-Q52L-CPZ5",
  "status": "DRAFT",
  "detail": {
    "invoice_number": "#123",
    "reference": "deal-ref",
    "invoice_date": "2018-11-12",
    "currency_code": "USD",
    "note": "Thank you for your business.",
    "term": "No refunds after 30 days.",
    "memo": "This is a long contract",
    "payment_term": {
      "term_type": "NET_10",
      "due_date": "2018-11-22"
    },
    "metadata": {
      "create_time": "2018-11-12T08:00:20Z",
      "recipient_view_url": "https://www.paypal.com/invoice/p/#Z56S5LLAQ52LCPZ5",
      "invoicer_view_url": "https://www.paypal.com/invoice/details/INV2-Z56S-5LLA-Q52L-CPZ5"
    }
  },
  "invoicer": {
    "name": {
      "given_name": "David",
      "surname": "Larusso"
    },
    "address": {
      "address_line_1": "1234 First Street",
      "address_line_2": "337673 Hillside Court",
      "admin_area_2": "Anytown",
      "admin_area_1": "CA",
      "postal_code": "98765",
      "country_code": "US"
    },
    "email_address": "merchant@example.com",
    "phones": [
      {
        "country_code": "001",
        "national_number": "4085551234",
        "phone_type": "MOBILE"
      }
    ],
    "website": "https://example.com",
    "tax_id": "ABcNkWSfb5ICTt73nD3QON1fnnpgNKBy-Jb5SeuGj185MNNw6g",
    "logo_url": "https://example.com/logo.PNG",
    "additional_notes": "2-4"
  },
  "primary_recipients": [
    {
      "billing_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        },
        "email_address": "bill-me@example.com",
        "phones": [
          {
            "country_code": "001",
            "national_number": "4884551234",
            "phone_type": "HOME"
          }
        ],
        "additional_info_value": "add-info"
      },
      "shipping_info": {
        "name": {
          "given_name": "Stephanie",
          "surname": "Meyers"
        },
        "address": {
          "address_line_1": "1234 Main Street",
          "admin_area_2": "Anytown",
          "admin_area_1": "CA",
          "postal_code": "98765",
          "country_code": "US"
        }
      }
    }
  ],
  "items": [
    {
      "name": "Yoga Mat",
      "description": "Elastic mat to practice yoga.",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "50.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "3.27"
        }
      },
      "discount": {
        "percent": "5",
        "amount": {
          "currency_code": "USD",
          "value": "2.5"
        }
      },
      "unit_of_measure": "QUANTITY"
    },
    {
      "name": "Yoga T Shirt",
      "quantity": "1",
      "unit_amount": {
        "currency_code": "USD",
        "value": "10.00"
      },
      "tax": {
        "name": "Sales Tax",
        "percent": "7.25",
        "amount": {
          "currency_code": "USD",
          "value": "0.34"
        }
      },
      "discount": {
        "amount": {
          "currency_code": "USD",
          "value": "5.00"
        }
      },
      "unit_of_measure": "QUANTITY"
    }
  ],
  "configuration": {
    "partial_payment": {
      "allow_partial_payment": true,
      "minimum_amount_due": {
        "currency_code": "USD",
        "value": "20.00"
      }
    },
    "allow_tip": true,
    "tax_calculated_after_discount": true,
    "tax_inclusive": false,
    "template_id": "TEMP-19V05281TU309413B"
  },
  "amount": {
    "currency_code": "USD",
    "value": "74.21",
    "breakdown": {
      "item_total": {
        "currency_code": "USD",
        "value": "60.00"
      },
      "custom": {
        "label": "Packing Charges",
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        }
      },
      "shipping": {
        "amount": {
          "currency_code": "USD",
          "value": "10.00"
        },
        "tax": {
          "name": "Sales Tax",
          "percent": "7.25",
          "amount": {
            "currency_code": "USD",
            "value": "0.73"
          }
        }
      },
      "discount": {
        "item_discount": {
          "currency_code": "USD",
          "value": "-7.50"
        },
        "invoice_discount": {
          "percent": "5",
          "amount": {
            "currency_code": "USD",
            "value": "-2.63"
          }
        }
      },
      "tax_total": {
        "currency_code": "USD",
        "value": "4.34"
      }
    }
  },
  "due_amount": {
    "currency_code": "USD",
    "value": "74.21"
  },
  "links": [
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
      "rel": "self",
      "method": "GET"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/send",
      "rel": "send",
      "method": "POST"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
      "rel": "replace",
      "method": "PUT"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5",
      "rel": "delete",
      "method": "DELETE"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/payments",
      "rel": "record-payment",
      "method": "POST"
    },
    {
      "href": "https://api.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/generate-qr-code",
      "rel": "qr-code",
      "method": "POST"
    }
  ]
}', true);

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'get');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->get($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_cancel_an_invoice()
    {
        $expectedResponse = '';

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/cancel';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "subject": "Invoice Cancelled",
  "note": "Cancelling the invoice",
  "send_to_invoicer": true,
  "send_to_recipient": true,
  "additional_recipients": [
    "user@example.com"
  ]
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_generate_qr_code_for_invoice()
    {
        $expectedResponse = '--95dbdbed-7536-4c24-b5ca-bcdbc0006612 Content-Disposition: form-data; name="image" Content-Type: application/octet-stream iVBORw0KGgoAAAANSUhEUgAAAJYAAACWAQAAAAAUekxPAAABxUlEQVR42u2WMY7kIBBFq0VA1n0BS1yDjCvZF7DxBdxXIuMaSFzAzgiQaz6t9mxLm1AbrCYYy4H1AlT1f9XHxH89lX7Z/2KJKN3CMIW6FCInYplLPtisoU6FTyHzti6RN5tPm+5ixrtTp0uP8g8s744eMS1yxvikNEOJz966GPTLaOL1fmjaxfAkaLCy2t2Hl10sPUIaNY1araFhCat3TbODDPkZ68Ii1sqfX62c1rzP62W8uWG0aiMaxSyvpS4hez2MzXkZg+FL4NNCwku/XtZ8g/Be550+Pe9jWj0x41rt1ngZyxzYa+NpmDjNMlYx1yhhs2glM8vY3IQ3qGWz9Tqvk7F3cGyYNd3KQDKGSWFGDjFNIZ8yhuWgR8gb5jR8+9bJ8rPUCd3oYbY4VcQqaWSYWRGcdnhnSS+D6lhKJIE5+JrTXtaquDtzuuypXrV0stRKwLAUzFodnYjxERP28ihtLw8WsbQE7JbxCD9SmxMxfsUYpiZ7lxYWMewltzuqKMz4n13tYi3vl6jW2FJQynBH+Za7Zie6sZRhNVXLTkqTmGUE5xSRu5dv3Qz3uYdj0bwkFLGWfxxoJMXx28tO9vu/9oPYF0bR/hBeOiwMAAAAAElFTkSuQmCC --95dbdbed-7536-4c24-b5ca-bcdbc0006612--';

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/generate-qr-code';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "width": 400,
  "height": 400
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_register_payment_for_invoice()
    {
        $expectedResponse = \GuzzleHttp\json_decode('{
  "payment_id": "EXTR-86F38350LX4353815"
}', true);

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/payments';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "method": "BANK_TRANSFER",
  "payment_date": "2018-05-01",
  "amount": {
    "currency_code": "USD",
    "value": "10.00"
  }
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_delete_payment_for_invoice()
    {
        $expectedResponse = '';

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/payments/EXTR-86F38350LX4353815';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'delete');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->delete($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_refund_payment_for_invoice()
    {
        $expectedResponse = \GuzzleHttp\json_decode('{
  "refund_id": "EXTR-2LG703375E477444T"
}', true);

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/refunds';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "method": "BANK_TRANSFER",
  "refund_date": "2018-05-21",
  "amount": {
    "currency_code": "USD",
    "value": "5.00"
  }
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_delete_refund_for_invoice()
    {
        $expectedResponse = '';

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-333R-YUQL-YNNN-D7WF/refunds/EXTR-2LG703375E477444T';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'delete');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->delete($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_send_an_invoice()
    {
        $expectedResponse = '';

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-EHNV-LJ5S-A7DZ-V6NJ/send';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "send_to_invoicer": true
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }

    /** @test */
    public function it_can_send_reminder_for_an_invoice()
    {
        $expectedResponse = '';

        $expectedEndpoint = 'https://api.sandbox.paypal.com/v2/invoicing/invoices/INV2-Z56S-5LLA-Q52L-CPZ5/remind';
        $expectedParams = [
            'headers' => [
                'Accept'            => 'application/json',
                'Accept-Language'   => 'en_US',
                'Authorization'     => 'Bearer some-token',
            ],
            'json' => \GuzzleHttp\json_decode('{
  "subject": "Reminder: Payment due for the invoice #ABC-123",
  "note": "Please pay before the due date to avoid incurring late payment charges which will be adjusted in the next bill generated.",
  "send_to_invoicer": true,
  "additional_recipients": [
    "customer-a@example.com",
    "customer@example.com"
  ]
}', true),
        ];

        $mockHttpClient = $this->mock_http_request(\GuzzleHttp\json_encode($expectedResponse), $expectedEndpoint, $expectedParams, 'post');

        $this->assertEquals($expectedResponse, \GuzzleHttp\json_decode($mockHttpClient->post($expectedEndpoint, $expectedParams)->getBody(), true));
    }
}