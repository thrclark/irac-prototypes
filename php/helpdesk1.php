<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>IU Help Desk</title>
<link href="../less/styles.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="top">
<div class="wrapper">
    <?php include ('includes/brand-header.php') ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <h1 class="">IU Help Desk</h1>
                </div>
                <div class="col-xs-4"> </div>
            </div>
        </div>
    </header>
    <div class="main-content container" role="main">
        <div class="row">
            <div class="col-md-4 search">
                <div class="lead">Search</div>
                <div>
                    <ul class="nav nav-tabs nav-justified" >
                        <li role="presentation" class="active"><a href="#home"  data-toggle="tab" id="by_user">By User</a></li>
                        <li role="presentation"><a href="#profile"  data-toggle="tab" id="by_group">By Group</a></li>
                    </ul>
                </div>
                <div class="well well-sm">
                    <div class="input-group input-group-lg">
                        <label for="query" class="sr-only">Search Query</label>
                        <input type="text" class="form-control" placeholder="" id="query">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="searchbutton"><i class="fa fa-search" aria-hidden="true"><span class="sr-only">Search</span></i></button>
                        </span> </div>
                </div>
                <label class="checkbox-inline" id="archivalrecords" style="">
                    <input type="checkbox" id="inlineCheckbox1" value="option1">
                    search historical records </label>
            </div>
            <div class="col-md-8">
                <div class="search-results">
                    <div id="sr_user" style="display:block">
                        <div id="sr_user_info" style="margin-bottom:20px">
                            <div class="section-head row">
                                <div class="col-xs-12">
                                    <div class="lead"> <span>User</span><span id="sr_userDetailslabel" style="display:none">: thrclark</span></div>
                                </div>
                            </div>
                            <hr>
                            <dl id="sr_userDetails" style="display:none">
                                <dt>Common Name</dt>
                                <dd>Clark, Tom Robert</dd>
                                <dt>EMPLID</dt>
                                <dd>0001261181</dd>
                                <dt>Family Name</dt>
                                <dd>Clark</dd>
                                <dt>Primary Chart</dt>
                                <dd>SM</dd>
                                <dt>OU</dt>
                                <dd>BL</dd>
                                <dt>Network ID</dt>
                                <dd>thrclark</dd>
                                <dt>Primary Org</dt>
                                <dd>VPIT</dd>
                                <dt>Full Name</dt>
                                <dd>Tom Clark</dd>
                                <dt>UID</dt>
                                <dd>thrclark</dd>
                                <dt>Personal Affiliation</dt>
                                <dd>Staff, Alumni</dd>
                                <dt>OU Personal Affiliation</dt>
                                <dd>BL.Staff</dd>
                                <dt>Given Name</dt>
                                <dd>Tom</dd>
                                <dt>Currently Enrolled</dt>
                                <dd>No</dd>
                                <dt>IU Email</dt>
                                <dd>thrclark@iu.edu</dd>
                            </dl>
                            <div class="clearfix"></div>
                        </div>
                        <div id="sr_user_groups" style="display:none">
                            <div class="section-head row">
                                <div class="col-md-8">
                                    <div class="lead">Group Membership</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-sm">
                                        <label for="filter_group" class="sr-only">Filter Groups</label>
                                        <input type="text" class="form-control" id="filter_group" placeholder="filter">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <ul class="list-unstyled" id="grouplist">
                                <li>AC_MEETINGHOSTS</li>
                                <li>ATH-ADMIN</li>
                                <li>BL-CIB-CONFERENCEROOM-AUTOSCHEDULE</li>
                                <li>BL-CIB-CONFERENCEROOM-REVIEWER</li>
                                <li>BL-CIB-FOCUSBOOTH-AUTOSCHEDULE</li>
                                <li>BL-CIB-FOCUSBOOTH-REVIEWER</li>
                                <li>BL-CIB-MP-B-REQUESTAPPROVAL</li>
                                <li>BL-CIB-MP-B-REVIEWER</li>
                                <li>BL-CIB-WRUBEL-LOBBY-REQUESTAPPROVAL</li>
                                <li>BL-CIB-WRUBEL-LOBBY-REVIEWER</li>
                                <li>BL-IUIC-CONFERENCEROOM-AUTOSCHEDULE</li>
                                <li>BL-IUIC-CONFERENCEROOM-REVIEWER</li>
                                <li>BL-LIBG-EZPROXY-IUB-ACCESS</li>
                                <li>BL-T2-CONFERENCEROOM-AUTOSCHEDULE</li>
                                <li>BL-T2-CONFERENCEROOM-REVIEWER</li>
                                <li>BL-UITS-APPOINTEDSTAFF</li>
                                <li>BL-UITS-AVL-SOS-AUTOSCHEDULE</li>
                                <li>BL-UITS-BISONUSERS</li>
                                <li>BL-UITS-CALENDAR-BACKDOOR</li>
                                <li>BL-UITS-CALENDAR-BACKDOOR-SND</li>
                                <li>BL-UITS-CALENDAR-BACKDOOR-STG</li>
                                <li>BL-UITS-CIB-180-REV</li>
                                <li>BL-UITS-EDEN</li>
                                <li>BL-UITS-EDSS_EBI_CONSUMER_MEMBERS</li>
                                <li>BL-UITS-EDSS_EBI_CONSUMER_PRD_TAB_CON_PRD_VPR_ALLFACSTF</li>
                                <li>BL-UITS-EDSS_EBI_CONSUMER_PRD_UIRR-UA-NFST</li>
                                <li>BL-UITS-EDSS_UNIVERSITY_INTERNAL</li>
                                <li>BL-UITS-ENTERPRISE-SOFTWARE-STAFF</li>
                                <li>BL-UITS-ERA</li>
                                <li>BL-UITS-ERACONTRIBUTORS</li>
                                <li>BL-UITS-ERAUSERS</li>
                                <li>BL-UITS-ERAVIEWERS</li>
                                <li>BL-UITS-ES-ESID_STAFF</li>
                                <li>BL-UITS-ESA-MONITORING-ACCESS</li>
                                <li>BL-UITS-ESPD-SD-TEAM</li>
                                <li>BL-UITS-FSNETWORKUSERS</li>
                                <li>BL-UITS-HDS-NAS</li>
                                <li>BL-UITS-HDS-NAS-TEST</li>
                                <li>BL-UITS-LSP-COMPUTERDFSACCESS</li>
                                <li>BL-UITS-LSP-WINXPSP</li>
                                <li>BL-UITS-ONESTART-ADMIN</li>
                                <li>BL-UITS-ONESTART-ALL-PUBLISHERS</li>
                                <li>BL-UITS-ONESTART-BRTE</li>
                                <li>BL-UITS-ONESTART-CCF-EMAIL</li>
                                <li>BL-UITS-ONESTART-HRMS-TST</li>
                                <li>BL-UITS-ONESTART-OVERSEER</li>
                                <li>BL-UITS-ONESTART-SECUREHELPDESK</li>
                                <li>BL-UITS-ONESTART-STUDENT-SERVICES-DEMO</li>
                                <li>BL-UITS-ONESTART-SUPPORT-PAGE</li>
                                <li>BL-UITS-ONESTART-TEAM</li>
                                <li>BL-UITS-ONESTART-UISDEV</li>
                                <li>BL-UITS-ONESTART2-BACKDOOR</li>
                                <li>BL-UITS-ONESTART2-PUBLISHERS</li>
                                <li>BL-UITS-ONESTART2-ROLE-VIEWER</li>
                                <li>BL-UITS-PICSALL</li>
                                <li>BL-UITS-PSE-BACKDOOR</li>
                                <li>BL-UITS-RESMBOX-CIB-MOTHER-ROOM-AUTOSCHEDULE</li>
                                <li>BL-UITS-RESMBOX-CIB-MOTHER-ROOM-REVIEWERS</li>
                                <li>BL-UITS-RESMBOX-IR-MOTHER-ROOM-AUTOSCHEDULE</li>
                                <li>BL-UITS-RESMBOX-IR-MOTHER-ROOM-REVIEWERS</li>
                                <li>BL-UITS-SAV</li>
                                <li>BL-UITS-SIT</li>
                                <li>BL-UITS-SITDEV</li>
                                <li>BL-UITS-TIME-ONESTART-DEMO</li>
                                <li>BL-UITS-USABLE</li>
                                <li>BL-UITS-YAKUSERS</li>
                                <li>GETCONNECTEDREPORTING</li>
                                <li>IN-HNET-UITSLYNC</li>
                                <li>IN-IT-ATRIUM-REVIEWER</li>
                                <li>IN-IT-CONFERENCEROOM-AUTOSCHEDULE</li>
                                <li>IN-IT-CONFERENCEROOM-REVIEWER</li>
                                <li>IN-IT-FOCUSBOOTH-AUTOSCHEDULE</li>
                                <li>IN-IT-FOCUSBOOTH-REVIEWER</li>
                                <li>IN-IT-GALLERY-REVIEWER</li>
                                <li>IN-IT-LOUNGE-REVIEWER</li>
                                <li>IU-CCI-MIGRATION-PRD-EXCHANGEMIGRATION-SELF</li>
                                <li>IU-CCI-SHIELD-PRD-GENERAL-VIEWERS</li>
                                <li>IU-CCI-SHIELD-PRD-PERSISTENTCHATCATEGORY-MANAGERS</li>
                                <li>IU-CCI-SHIELD-PRD-USERS</li>
                                <li>IU-CV-7ZIP-FS</li>
                                <li>IU-CV-ADOBE-CS5.5-FS</li>
                                <li>IU-CV-ADOBEACROBAT-FS</li>
                                <li>IU-CV-ADOBEREADER-FS</li>
                                <li>IU-CV-ANYCLIENT-FS</li>
                                <li>IU-CV-AQUADATASTUDIO-FS</li>
                                <li>IU-CV-ARCGIS-FS</li>
                                <li>IU-CV-AUDACITY-FS</li>
                                <li>IU-CV-BASEAPPACCESS-FS</li>
                                <li>IU-CV-CICSUPERVISORCLIENT3-FS</li>
                                <li>IU-CV-CICSUPERVISORCLIENT3-S</li>
                                <li>IU-CV-CICUSERCLIENT3-FS</li>
                                <li>IU-CV-CICUSERCLIENT3-S</li>
                                <li>IU-CV-DIRECTRT-FS</li>
                                <li>IU-CV-DROPBOX-FS</li>
                                <li>IU-CV-EASYMP3-FS</li>
                                <li>IU-CV-EVERNOTE-FS</li>
                                <li>IU-CV-FOXIT-FS</li>
                                <li>IU-CV-FSALL</li>
                                <li>IU-CV-GEOMETERSSKETCHPAD-FS</li>
                                <li>IU-CV-GOLDVARB-FS</li>
                                <li>IU-CV-GOPENMOL-FS</li>
                                <li>IU-CV-IDENTITYFINDER-FS</li>
                                <li>IU-CV-IE8-FS</li>
                                <li>IU-CV-IMPACT-FS</li>
                                <li>IU-CV-INSPIRATION-FS</li>
                                <li>IU-CV-INSTACAL-FS</li>
                                <li>IU-CV-KIDPIX-FS</li>
                                <li>IU-CV-KIDSPIRATION3-FS</li>
                                <li>IU-CV-LYNC-FS</li>
                                <li>IU-CV-MAGE-FS</li>
                                <li>IU-CV-MAPLE15-FS</li>
                                <li>IU-CV-MATHEMATICA8-FS</li>
                                <li>IU-CV-MATLAB2011A-FS</li>
                                <li>IU-CV-MATLAB2012A-ALL</li>
                                <li>IU-CV-MEGA-FS</li>
                                <li>IU-CV-MINITAB16-FS</li>
                                <li>IU-CV-NOVANETPORTAL-FS</li>
                                <li>IU-CV-OFFICE2K10-FS</li>
                                <li>IU-CV-OFFICE2K3-FS</li>
                                <li>IU-CV-OFFICE2K7-FS</li>
                                <li>IU-CV-ONSCREENKEYBOARD-FS</li>
                                <li>IU-CV-PARAVIEW-FS</li>
                                <li>IU-CV-PICASA-FS</li>
                                <li>IU-CV-PRIMAVERACONTRACTMANAGER-FS</li>
                                <li>IU-CV-PROJECT-FS</li>
                                <li>IU-CV-PUTTY-FS</li>
                                <li>IU-CV-PYTHON 2.7.1-FS</li>
                                <li>IU-CV-QUICKTIME-FS</li>
                                <li>IU-CV-R-FS</li>
                                <li>IU-CV-REMOTEDESKTOPCONNECTION-FS</li>
                                <li>IU-CV-RETSCREEN-FS</li>
                                <li>IU-CV-SAPGUI-FS</li>
                                <li>IU-CV-SAS9.3-FS</li>
                                <li>IU-CV-SCRATCH-FS</li>
                                <li>IU-CV-SEISMICERUPTION-FS</li>
                                <li>IU-CV-SPSS19-FS</li>
                                <li>IU-CV-SPSS20-ALL</li>
                                <li>IU-CV-STATA12-FS</li>
                                <li>IU-CV-STATTRANSFER11-FS</li>
                                <li>IU-CV-STELLARIUM-FS</li>
                                <li>IU-CV-SWISSPDBVIEWER-FS</li>
                                <li>IU-CV-SYMYXDRAW-FS</li>
                                <li>IU-CV-TEXTPAD-FS</li>
                                <li>IU-CV-TURNINGPOINTANYWHERE-FS</li>
                                <li>IU-CV-VISIO-FS</li>
                                <li>IU-CV-VLC-FS</li>
                                <li>IU-CV-VSPHERE-FS</li>
                                <li>IU-CV-WINDOWSHELP-FS</li>
                                <li>IU-CV-WINQUAKE-FS</li>
                                <li>IU-CV-WINSCP-FS</li>
                                <li>IU-CV-WSXM-FS</li>
                                <li>IU-EITS-FOCUSBOOTHS-USERS</li>
                                <li>IU-ENTLMT-APP-CAS-MFA</li>
                                <li>IU-ENTLMT-APP-CAS-MFA-REQUIRED</li>
                                <li>IU-ENTLMT-APP-CAS-TEST-MFA</li>
                                <li>IU-ENTLMT-APP-UIRR-UA-NFSTU</li>
                                <li>IU-IMS-CAS-MFA-REQ</li>
                                <li>IU-ITCP-IT28-STATUS</li>
                                <li>IU-LSPS-DBV2-GUESTUSERS</li>
                                <li>IU-LSPS-DBV2-IUWARE</li>
                                <li>IU-LSPS-DBV2-PRODUCTKEYS</li>
                                <li>IU-LSPS-DBV2-SEARCHEXEMPTIONS</li>
                                <li>IU-LSPS-IUWAREEXEMPTION</li>
                                <li>IU-LSPS-IUWARERESTRICTEDACCESS</li>
                                <li>IU-LSPS-IUWARE_SERVER_DOWNLOAD</li>
                                <li>IU-LSPS-KBRESTRICTEDACCESS</li>
                                <li>IU-LSPS-LSPONLINEUITS</li>
                                <li>IU-LSPS-LSPONLINEUSER</li>
                                <li>IU-LSPS-W2K3R2</li>
                                <li>IU-MSSG-ECA-IUIPSECOFFLINE</li>
                                <li>IU-MSSG-ECA-IUWEBSERVER</li>
                                <li>IU-MSSG-ECA-IUWORKSTATIONAUTHENTICATION</li>
                                <li>IU-MSSG-ECA-IUWORKSTATIONAUTHENTICATIONOFFLINE</li>
                                <li>IU-ONESTART-FORUMS</li>
                                <li>IU-ONESTART-KUALI-DEVELOPERS</li>
                                <li>IU-ONESTART-ONEPLACE-INITIAL-TESTERS</li>
                                <li>IU-ONESTART-OSG-ADMINS</li>
                                <li>IU-ONESTART-ROLE-VIEWER</li>
                                <li>IU-PSIA-HIPAA-ALERT-SEPT2012</li>
                                <li>IU-SAV-HCP-AD-INTEGRATION-GROUP</li>
                                <li>IU-SCT2-FREEDUO</li>
                                <li>IU-UITS-ALLSTAFF</li>
                                <li>IU-UITS-CV-FACSTAFF</li>
                                <li>IU-UITS-ENTERPRISE_SYSTEMS_INTEGRATION-STAFF</li>
                                <li>IU-UITS-ITCP-PHISHALARM-DOWNLOAD</li>
                                <li>IU-UITS-ITCP-UITS-PROFESSIONALS-ALL</li>
                                <li>IU-UITS-ITCP-WOMBAT-TRAINING</li>
                                <li>IU-UITS-KMS-AUDIENCE-IU-KB</li>
                                <li>IU-UITS-KMS-AUDIENCE-KMS-ALL</li>
                                <li>IU-UITS-KMS-AUDIENCE-UITS</li>
                                <li>IU-UITS-KMS-EDIT-APPROVER</li>
                                <li>IU-UITS-KMS-EDIT-APPROVER-ESPD</li>
                                <li>IU-UITS-KMS-EDIT-USER</li>
                                <li>IU-UITS-KMS-EDIT-USER-MDTEST</li>
                                <li>IU-UITS-MANAGED-ALUMNI</li>
                                <li>IU-UITS-MANAGED-BL-STAFF</li>
                                <li>IU-UITS-MANAGED-BOX-USERS</li>
                                <li>IU-UITS-MANAGED-DEPT-UA-VPIT</li>
                                <li>IU-UITS-MANAGED-EBI-FERPA-ACCESS</li>
                                <li>IU-UITS-MANAGED-EBI-UNIVERSITY-INTERNAL</li>
                                <li>IU-UITS-MANAGED-EXCHANGE</li>
                                <li>IU-UITS-MANAGED-EZPROXY-BL</li>
                                <li>IU-UITS-MANAGED-ITCP-WOMBAT-TRAINING</li>
                                <li>IU-UITS-MANAGED-KB-ALL</li>
                                <li>IU-UITS-NETWORKING-STAFF</li>
                                <li>IU-UITS-RESMBOX-IC-120-CAL-REQUESTAPPROVAL</li>
                                <li>IU-UITS-RESMBOX-IC-216-CAL-REQUESTAPPROVAL</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_BL-CR-003-HPLJ9040-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_BL-IC-130-HPM476NW-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_BL-IC-133-RICOHMP-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_BL-LI-209-HPCLJ2605-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_BL-LI-305-HPLJ3005DN-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_BL-LI-E249-XP6500DN-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-013-HPLJP3015-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-035-HPCLJCP4005-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-113C-HPLJPD055-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-129B-HPCLJ3600-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-205-RICOHMP6001-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-210M-HPLJ9050-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-225D-HP451DN-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-314F-CIR5055-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-314F-HPLJ9050-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-314H-DJ800-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-324-HPLJ4050-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-324-KM4690MF-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-PRINTERS_IN-IT-408-RICOH3300-P</li>
                                <li>IU-UITS-SERVERS-PROD-PRINT-OHM-USERS</li>
                                <li>IU-UITS-TURING-DEPT-ES-ES-ESI-RW</li>
                                <li>IU-UITS-TURING-DEPT-ES-ES-RW</li>
                                <li>IU-UITS-TURING-DEPT-ES-RW</li>
                                <li>IU-UITS-TURING-USERS</li>
                                <li>IU-UITS-TURING-WORKGROUPACCESS</li>
                                <li>IU-UITS-TURING-WRKGRP-DCOPS_APPLICATION_BATCH-RO</li>
                                <li>IU-UITS-TURING-WRKGRP-DCOPS_DOCUMENT_DROPOFF</li>
                                <li>IU-UITS-TURING-WRKGRP-DSCALL-RO</li>
                                <li>IU-UITS-TURING-WRKGRP-PXA</li>
                                <li>IU-UITS-TURING-WRKGRP-UIS_FISCAL</li>
                                <li>IU-UITS-WORKFLOW-PUBLISHING-GLOBAL</li>
                                <li>IU-UITS-WORKSTATIONUSERS</li>
                                <li>IU-USSS_STAFF_FAC_GRAD_PRO_ACCESS</li>
                                <li>IU-WCMS-USERS</li>
                                <li>JTEST-ADS-ADMIN2</li>
                                <li>JTEST-ADS-TEST</li>
                                <li>JTEST-USER-VIEW</li>
                                <li>KUALI-WORKFLOW-ADMINS</li>
                                <li>NATEGROUP-UNT-TEST</li>
                                <li>NATEGROUP2</li>
                                <li>NATEGROUP541</li>
                                <li>NATEGROUP542</li>
                                <li>NATEGROUPXXXXX</li>
                                <li>SAFEWORD_USERS</li>
                                <li>SDD-DASHBOARD</li>
                                <li>SDD-HERMES-REPORTING</li>
                                <li>SDD-IUWARE</li>
                                <li>SDD-IUWARE-IMS-EMPLOYEE</li>
                                <li>SDD-IUWARE-IMS-STAFF</li>
                                <li>SDD-IUWARE-SALES</li>
                                <li>SSL-IUWARE-ROLE-ITPRO</li>
                                <li>SSL-IUWARE-ROLE-MUSSIBELIUS</li>
                                <li>SSL-IUWARE-ROLE-UITSPGP</li>
                                <li>SSL-IUWARE-ROLEGROUPS</li>
                                <li>UCP-USERS</li>
                                <li>UCS-ALL</li>
                                <li>UCS-APPOINTED</li>
                                <li>UIS STAFF ? BLOOMINGTON</li>
                                <li>UITS-10TH-UNION</li>
                            </ul>
                        </div>
                    </div>
                    <div id="sr_group" style="display:none">
                        <div class="section-head row">
                            <div class="col-md-8">
                                <div class="lead"><span id="label_group">Group</span><span id="sr_grouplabel" style="display:none">: UCS-ALL</span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-sm">
                                    <label for="filter_member" class="sr-only">Filter Members</label>
                                    <input type="text" class="form-control" id="filter_member" placeholder="filter" style="display:none">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ul class="list-unstyled" id="sr_groupResults" style="display:none">
                            <li>ABERRANTTRAM</li>
                            <li>ABSENCEHIGHER</li>
                            <li>ADAPTATIONCANINE</li>
                            <li>ADVICEBATHTUB</li>
                            <li>ALVEOLICIRCLE</li>
                            <li>AMBULANCEPERTURBED</li>
                            <li>AMOSTIRRY</li>
                            <li>ANNOUNCEDENBY</li>
                            <li>APHELIONMET</li>
                            <li>APPEALCHOCKS</li>
                            <li>AROSDUKE</li>
                            <li>ATMOSPHEREWORDS</li>
                            <li>BABOONHYPNOTIC</li>
                            <li>BACKPACKHULL</li>
                            <li>BASINMOTOR</li>
                            <li>BASKVENFORD</li>
                            <li>BEIGNETSORROWFUL</li>
                            <li>BILLEDSHALLOW</li>
                            <li>BIOPSYCERCANO</li>
                            <li>BISECTISSUE</li>
                            <li>BITSSPANISH</li>
                            <li>BLISSFULSCRUFFY</li>
                            <li>BLOCKWATERSKIER</li>
                            <li>BODMINPRUNING</li>
                            <li>BOGEYMAN</li>
                            <li>BOLDMONTGOMERY</li>
                            <li>BOOTEDSUSTAIN</li>
                            <li>BOUNDFELISE</li>
                            <li>BREATHEMUNCH</li>
                            <li>BROOMFLAGELLUM</li>
                            <li>BRRINGBESTOW</li>
                            <li>BUFFALODISLIKE</li>
                            <li>BUGGERWINK</li>
                            <li>CALCIUMFEAR</li>
                            <li>CANESSLAMMED</li>
                            <li>CARDIOIDREPEAT</li>
                            <li>CASINOKOBUK</li>
                            <li>CELSIUSBISHOP</li>
                            <li>CISCOIT</li>
                            <li>COACHOKOTOKS</li>
                            <li>COBOURGTOBOGGAN</li>
                            <li>COFFINBAXTER</li>
                            <li>COLOBUSIRATE</li>
                            <li>COMBINEAPPAREL</li>
                            <li>CORNFRODO</li>
                            <li>CORONAHAMLET</li>
                            <li>CROSSTREESPRESSURE</li>
                            <li>CRUDIVORETORTELLINI</li>
                            <li>CUMBRIARUM</li>
                            <li>DARCYGANGWAY</li>
                            <li>DECENTHORNBILL</li>
                            <li>DEFENDEDROLLES</li>
                            <li>DEFIANTBOCCE</li>
                            <li>DICKYSQUARES</li>
                            <li>DONATEDAROMATIC</li>
                            <li>DOPEYTASTE</li>
                            <li>DOROCOVET</li>
                            <li>DORSETSTRAIGHT</li>
                            <li>DOUTMADAME</li>
                            <li>DRIVERSURFER</li>
                            <li>EDDIENECESSARY</li>
                            <li>EIDARTPROTOCOL</li>
                            <li>ELOISEGLOBE</li>
                            <li>ELONGATIONMICRO</li>
                            <li>EONCALYPSO</li>
                            <li>EPONALUCY</li>
                            <li>EQUIPMENTBROWNIES</li>
                            <li>ERGOSPHERECLUNK</li>
                            <li>EULERMIRROR</li>
                            <li>EVERESTMATANE</li>
                            <li>EXAGGERATEPOISED</li>
                            <li>EXPANDDECORATORS</li>
                            <li>FALLOPIANSCORPIUS</li>
                            <li>FEATURESNIGERIAN</li>
                            <li>FEWPUNE</li>
                            <li>FIDDLERSAMMY</li>
                            <li>FIDDLEYWAIT</li>
                            <li>FILESITEM</li>
                            <li>FITNESSSHAG</li>
                            <li>FLAPJACKSARRAY</li>
                            <li>FORDANALOGUE</li>
                            <li>FORESTERGENTRY</li>
                            <li>FREECONVECTION</li>
                            <li>FREEZERUNUNOCTIUM</li>
                            <li>FRONTEDBILE</li>
                            <li>GAGGLEDAMAGING</li>
                            <li>GAILEECANTER</li>
                            <li>GHOSTENGAGEMENT</li>
                            <li>GITHUBBARKLEY</li>
                            <li>GOVERNESSSHORTY</li>
                            <li>GREATERALFRED</li>
                            <li>GROUCHYRAISINS</li>
                            <li>GUNSOBSTINACY</li>
                            <li>GYMCHARGE</li>
                            <li>HEARTYPARANOID</li>
                            <li>HUSHEDBRACES</li>
                            <li>IBEXELUMINOSITY</li>
                            <li>IRASINFUL</li>
                            <li>JACKSTAYSCHEMA</li>
                            <li>JIGGAHOURGLASS</li>
                            <li>JODRELLYODA</li>
                            <li>KARMAHULKING</li>
                            <li>KATIEDIAMOND</li>
                            <li>LAPWINGDATATYPE</li>
                            <li>LAUNCHINGROME</li>
                            <li>LIMPINGSTAIR</li>
                            <li>MACEDONIANALIEN</li>
                            <li>MAINMETHOD</li>
                            <li>MENTIONEDREALM</li>
                            <li>MIDDLEPROLOG</li>
                            <li>MINUSONE</li>
                            <li>MISSIONCONCUR</li>
                            <li>MITTPURSE</li>
                            <li>MODERATOPAST</li>
                            <li>MOJOLIVERPOOL</li>
                            <li>MOLLYACIDIC</li>
                            <li>MONORAILWHEEL</li>
                            <li>MOONSHADOW</li>
                            <li>MUSTYABERRANT</li>
                            <li>MYELOMACOLUMNS</li>
                            <li>NIGGLESCHRONIC</li>
                            <li>OLDSPECKLED</li>
                            <li>ONSMASHED</li>
                            <li>OUTDENTAFRICA</li>
                            <li>OWLUNABLE</li>
                            <li>PANDARAFTING</li>
                            <li>PAPERCLIPSNORKLING</li>
                            <li>PHALANGESPOULTRY</li>
                            <li>PILLMESOZOIC</li>
                            <li>PIXYBREAKABLE</li>
                            <li>POLARBEARGUDGEON</li>
                            <li>PORTFOLIOPROBLEMS</li>
                            <li>POSITIONQUARTERING</li>
                            <li>PRESERVEKAZOO</li>
                            <li>PROFITEROLETEMP</li>
                            <li>PROVESPROMPTING</li>
                            <li>RAINFELLOWSHIP</li>
                            <li>RATTLEEXTINCTION</li>
                            <li>REQUESTSTONE</li>
                            <li>RESISTORLETS</li>
                            <li>RIBBONPATCH</li>
                            <li>RICHIZZY</li>
                            <li>RIDECLYDACH</li>
                            <li>ROLLRESOURCE</li>
                            <li>ROSIESAXOPHONE</li>
                            <li>SANDBOXBOLT</li>
                            <li>SATJARGON</li>
                            <li>SCISSORSTONK</li>
                            <li>SCOOTLEVI</li>
                            <li>SEMLAHILARIOUS</li>
                            <li>SETTLEERRING</li>
                            <li>SHAMPOOQUEBALL</li>
                            <li>SHAPELESSSWELTERING</li>
                            <li>SHORTBREADINTESTINE</li>
                            <li>SHOWERSBISMARCK</li>
                            <li>SHREWDKELLOGS</li>
                            <li>SILICATEJEDI</li>
                            <li>SINGULARITYJOLLY</li>
                            <li>SKIINGDEGREES</li>
                            <li>SKIRTINGROYAL</li>
                            <li>SKYATLASANCHOR</li>
                            <li>SLANGERICHT</li>
                            <li>SLURPRADIATE</li>
                            <li>SNOBBYCOURTEOUS</li>
                            <li>SNOWDONGLASS</li>
                            <li>SPARKBOGEYMAN</li>
                            <li>SPEAKPEAT</li>
                            <li>SPECKLEDBESSEL</li>
                            <li>SPINALOUTDATED</li>
                            <li>STARTUPPI</li>
                            <li>STIMULUSSNOOPY</li>
                            <li>STINGYTHESE</li>
                            <li>SUFFERTRAPPED</li>
                            <li>SUNDAYLUNA</li>
                            <li>SUNDERLANDTIDY</li>
                            <li>SUPPORTERSCREAMED</li>
                            <li>SYNTHLUCERA</li>
                            <li>TAGWINDOW</li>
                            <li>TARPREBEL</li>
                            <li>TARRETKABUL</li>
                            <li>TATTEREDBAYSDALE</li>
                            <li>TEARSTEEL</li>
                            <li>TEMPORARYGHOST</li>
                            <li>THEMWEATHERLY</li>
                            <li>THUNDERYDIVERSITY</li>
                            <li>TICKETADZE</li>
                            <li>TOUCANEMPIRE</li>
                            <li>TRADEMARKAFFREIGHTMENT</li>
                            <li>UMBRIELBLEDGE</li>
                            <li>UNDERINFECTIOUS</li>
                            <li>VIATEKTON</li>
                            <li>VINNEYCLIPBOARD</li>
                            <li>WEATHERBOARDCULTURES</li>
                            <li>WIGGLEDENALI</li>
                            <li>WITTYNAVIGATION</li>
                            <li>WOLFTEA</li>
                            <li>XENOLITHCICI</li>
                            <li>YIKESCONDUCTING</li>
                            <li>YORKSHIRETIDALLY</li>
                            <li>YOUNGERGAME</li>
                        </ul>
                    </div>
                    <div class="no-matches" id="no_matches" style="display:none"> No matches for 'asdf' found.</div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
</div>
<script type="text/javascript" src="../js/jquery.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
<script>
    $(document).ready(function() {
        $("#by_user").click(function() {
            $("#sr_user, #archivalrecords").css("display", "block");
            $("#sr_group,#sr_userDetails, #sr_groupResults,#sr_grouplabel,#no_matches,#filter_member").css("display", "none");
            $("#query").val("");
        });
        $("#by_group").click(function() {
            $("#sr_user, #sr_userDetails,#sr_userDetailslabel, #sr_groupResults,#sr_grouplabel,#archivalrecords,#no_matches,#filter_member").css("display", "none");
            $("#sr_group").css("display", "block");
            $("#query").val("");
        });
        $("#query").focusout(function() {
            if (this.value == "thrclark") {
                $("#sr_userDetails,#sr_user_groups").css("display", "block");
				$("#sr_userDetailslabel").css("display", "inline-block");
            } else {
                $("#sr_userDetails,#sr_userDetailslabel,#sr_user_groups").css("display", "none");
            }
        });
        $("#query").focusout(function() {
            if (this.value == "UCS-ALL") {
                $("#sr_group, #sr_groupResults, #filter_member").css("display", "block");
				 $("#sr_grouplabel").css("display", "inline-block");
            } else {
                $("#sr_group,#sr_grouplabel, #sr_groupResults").css("display", "none");
            }
        });
        $("#query").focusout(function() {
            if (this.value == "asdf") {
                $("#no_matches").css("display", "block");
            } else {
                $("#no_matches").css("display", "none");
            }
        });
    });
</script> 
<script type='text/javascript'>
    $(document).ready(function() {
        $('#filter_group').keyup(function() {
            var value = $(this).val();
            $("#grouplist > li").each(function() {
                if ($(this).text().search(new RegExp(value, "i")) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
		
		$('#filter_member').keyup(function() {
            var value = $(this).val();
            $("#sr_groupResults > li").each(function() {
                if ($(this).text().search(new RegExp(value, "i")) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
		
    });
</script>
</body>
</html>