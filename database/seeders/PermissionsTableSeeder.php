<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 19,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 20,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 21,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 22,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 23,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 24,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 25,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 26,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 27,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 28,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 29,
                'title' => 'task_create',
            ],
            [
                'id'    => 30,
                'title' => 'task_edit',
            ],
            [
                'id'    => 31,
                'title' => 'task_show',
            ],
            [
                'id'    => 32,
                'title' => 'task_delete',
            ],
            [
                'id'    => 33,
                'title' => 'task_access',
            ],
            [
                'id'    => 34,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 35,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 36,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 37,
                'title' => 'team_create',
            ],
            [
                'id'    => 38,
                'title' => 'team_edit',
            ],
            [
                'id'    => 39,
                'title' => 'team_show',
            ],
            [
                'id'    => 40,
                'title' => 'team_delete',
            ],
            [
                'id'    => 41,
                'title' => 'team_access',
            ],
            [
                'id'    => 42,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 43,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 44,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 45,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 46,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 47,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 48,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 49,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 50,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 51,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 52,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 53,
                'title' => 'product_create',
            ],
            [
                'id'    => 54,
                'title' => 'product_edit',
            ],
            [
                'id'    => 55,
                'title' => 'product_show',
            ],
            [
                'id'    => 56,
                'title' => 'product_delete',
            ],
            [
                'id'    => 57,
                'title' => 'product_access',
            ],
            [
                'id'    => 58,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 59,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 60,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 61,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 62,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 63,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 64,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 65,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 66,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 67,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 68,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 69,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 70,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 71,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 72,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 73,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 74,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 75,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 76,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 77,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 78,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 79,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 80,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 81,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 82,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 83,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 84,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 85,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 86,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 87,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 88,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 89,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 90,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 91,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 92,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 93,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 94,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 95,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 96,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 97,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 98,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 99,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 100,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 101,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 102,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 103,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 104,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 105,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 106,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 107,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 108,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 109,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 110,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 111,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 112,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 113,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 114,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 115,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 116,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 117,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 118,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 119,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 120,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 121,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 122,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 123,
                'title' => 'course_create',
            ],
            [
                'id'    => 124,
                'title' => 'course_edit',
            ],
            [
                'id'    => 125,
                'title' => 'course_show',
            ],
            [
                'id'    => 126,
                'title' => 'course_delete',
            ],
            [
                'id'    => 127,
                'title' => 'course_access',
            ],
            [
                'id'    => 128,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 129,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 130,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 131,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 132,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 133,
                'title' => 'test_create',
            ],
            [
                'id'    => 134,
                'title' => 'test_edit',
            ],
            [
                'id'    => 135,
                'title' => 'test_show',
            ],
            [
                'id'    => 136,
                'title' => 'test_delete',
            ],
            [
                'id'    => 137,
                'title' => 'test_access',
            ],
            [
                'id'    => 138,
                'title' => 'question_create',
            ],
            [
                'id'    => 139,
                'title' => 'question_edit',
            ],
            [
                'id'    => 140,
                'title' => 'question_show',
            ],
            [
                'id'    => 141,
                'title' => 'question_delete',
            ],
            [
                'id'    => 142,
                'title' => 'question_access',
            ],
            [
                'id'    => 143,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 144,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 145,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 146,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 147,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 148,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 149,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 150,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 151,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 152,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 153,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 154,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 155,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 156,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 157,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 158,
                'title' => 'event_create',
            ],
            [
                'id'    => 159,
                'title' => 'event_edit',
            ],
            [
                'id'    => 160,
                'title' => 'event_show',
            ],
            [
                'id'    => 161,
                'title' => 'event_delete',
            ],
            [
                'id'    => 162,
                'title' => 'event_access',
            ],
            [
                'id'    => 163,
                'title' => 'patient_create',
            ],
            [
                'id'    => 164,
                'title' => 'patient_edit',
            ],
            [
                'id'    => 165,
                'title' => 'patient_show',
            ],
            [
                'id'    => 166,
                'title' => 'patient_delete',
            ],
            [
                'id'    => 167,
                'title' => 'patient_access',
            ],
            [
                'id'    => 168,
                'title' => 'country_create',
            ],
            [
                'id'    => 169,
                'title' => 'country_edit',
            ],
            [
                'id'    => 170,
                'title' => 'country_show',
            ],
            [
                'id'    => 171,
                'title' => 'country_delete',
            ],
            [
                'id'    => 172,
                'title' => 'country_access',
            ],
            [
                'id'    => 173,
                'title' => 'state_create',
            ],
            [
                'id'    => 174,
                'title' => 'state_edit',
            ],
            [
                'id'    => 175,
                'title' => 'state_show',
            ],
            [
                'id'    => 176,
                'title' => 'state_delete',
            ],
            [
                'id'    => 177,
                'title' => 'state_access',
            ],
            [
                'id'    => 178,
                'title' => 'city_create',
            ],
            [
                'id'    => 179,
                'title' => 'city_edit',
            ],
            [
                'id'    => 180,
                'title' => 'city_show',
            ],
            [
                'id'    => 181,
                'title' => 'city_delete',
            ],
            [
                'id'    => 182,
                'title' => 'city_access',
            ],
            [
                'id'    => 183,
                'title' => 'medical_record_create',
            ],
            [
                'id'    => 184,
                'title' => 'medical_record_edit',
            ],
            [
                'id'    => 185,
                'title' => 'medical_record_show',
            ],
            [
                'id'    => 186,
                'title' => 'medical_record_delete',
            ],
            [
                'id'    => 187,
                'title' => 'medical_record_access',
            ],
            [
                'id'    => 188,
                'title' => 'medical_menu_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
