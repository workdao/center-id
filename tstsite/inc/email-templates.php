<?php
$email_templates = array(
    'approve_candidate_doer_notice' => array(
        'title' => __('IT-Volunteer: you have been approved as participant!', 'tst'),
        'text' => __("Greetings, %s!\n\nYou have been approved to participate in task: %s.\n\n
            You can contact the task author for details with email: <a href='mailto:%s'>%s</a> or in some other ways (see <a href='%s'>author's profile</a>).
            \n\nHave a nice day!", 'tst'),
    ),
    'approve_candidate_author_notice' => array(
        'title' => __('IT-Volunteer: participant approved!', 'tst'),
        'text' => __("Greetings, %s!\n\nYou have approved some volunteer to participate in task: %s.\n\n
            You can contact the task doer for details with email: <a href='mailto:%s'>%s</a> or in some other ways (see <a href='%s'>doer's profile</a>).
            \n\nHave a nice day!", 'tst'),
    ),
    'refuse_candidate_doer_notice' => array(
        'title' => __('IT-Volunteer: you have been disapproved as participant', 'tst'),
        'text' => __("Hello, %s.\n\nYou have been disapproved to participate in task: %s.\n\nHave a nice day!", 'tst'),
    ),
    'refuse_candidate_author_notice' => array(
        'title' => __('IT-Volunteer: a volunteer for your task removed himself!', 'tst'),
        'text' => __("Hello, %s.\n\nSomeone has been removed himself from a volunteers for your task: %s.\n\nHis message is:\n%s\n\nHave a nice day!", 'tst'),
    ),
    'add_candidate_author_notice' => array(
        'title' => __('IT-Volunteer: a volunteer for your task appeared!', 'tst'),
        'text' => __("Hello, %s.\n\nSomeone is wishing to participate in your task: %s.\nThis volunteer is writing to you this: %s.\n\nYou can approve him if you wish on the task page: %s.\n\nHave a nice day!", 'tst'),
    ),
    'activate_account_notice' => array(
        'title' => __('ITVolunteer - activate your account', 'tst'),
        'text' => __("Greerings!\n\nYour registration is almost done. To complete it, please <a href='%s'>click here</a>.\n\nBest,\nITVolunteer", 'tst'),
        'test' => __('denisch_test_localization', 'tst'),
    ),
    'account_activated_notice' => array(
        'title' => __('it-volunteer - welcome!', 'tst'),
        'text' => __("Greetings!\n\nYour account is active now, welcome to it-volunteering ranks.\n\nYour login: <strong>%s</strong>\nPlease write down your pass to keep it safe.\n\nBest,\nit-volunteer", 'tst'),
    ),
    'new_comment_task_author_notification' => array(
        'title' => __('ITVolunteer - new comment on your task!', 'tst'),
        'text' => __("Greetings!\n\nYour task was commented by someone.\n\nYou can read it on task page: %s\n\nBest,\nITVolunteer", 'tst'),
    ),
    'deadline_coming_author_notification' => array(
        'title' => __('ITVolunteer - your task in coming to its deadline!', 'tst'),
        'text' => __("Greetings!\n\nYour task deadline will come in one day from now. You can monitor task activity on its page: %s.\n\nBest,\nITVolunteer", 'tst'),
    ),
    'deadline_coming_doer_notification' => array(
        'title' => __('ITVolunteer - task deadline is near!', 'tst'),
        'text' => __("Greetings!\n\nThe task you are participate in has a deadline coming in one day from now. You can review the task on its page: %s.\n\nBest,\nITVolunteer", 'tst'),
    ),
    'password_reset_notice' => array(
        'title' => '', // Default email title is used
        'text' => __("Greetings!\n\nSomeone requested that the password be reset for the following account: %s\n\nIf this was a mistake, just ignore this email and nothing will happen. To reset your password, visit the following address: %s\n\nBest,\nITVolunteer", 'tst'),
    ),
    'message_added_notification' => array(
        'title' => __('it-volunteer - new message from contact form', 'tst'),
        'text' => __("Greetings!\n\nSomeone leaved a message on the contact form.\n\nName: %s\nEmail: %s\nMessage:\n%s\n\nBest,\nit-volunteer", 'tst'),
    ),
//    '' => array(
//        'title' => ,
//        'text' => ,
//    ),
);