<?php 
class civimobile {
  function home() {
    require_once 'civimobile.home.php';
    exit;
  }

  function contacts() {
    require_once 'civimobile.contacts.tpl.php';
    exit;
  }

  function participantCheckin() {
    require_once 'civimobile.participant_checkin.html';
    exit;
  }

  function surveyContacts() {
    require_once 'civimobile.survey_contacts.html';
    exit;
  }
  
  function surveyInterview() {
    require_once 'civimobile.survey_interview.html';
    exit;
  }
}
