<!DOCTYPE html>
<html class="loading" data-textdirection="ltr">

<head>
    
    <meta http-equiv="Content-Type" content="; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Contact Admin</title>
    <link rel="apple-touch-icon"
          href="{{asset("/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png")}}">
    <link rel="shortcut icon" type="image/x-icon"
          href="{{asset("/admin-assets/app-assets/images/favicon/favicon-32x32.png")}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset("/admin-assets/app-assets/vendors/vendors.min.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/pages/page-contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/custom/custom.css')}}">


</head>


<body
class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   "
data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

@include('Theme.common-template.header')
<ul class="display-none" id="default-search-main">
<li class="auto-suggestion-title"><a class="collection-item" href="#">
    <h6 class="search-title">FILES</h6>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="/admin-assets/app-assets/images/icon/pdf-image.png" width="24"
                                     height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                    submitted</span>
                <small class="grey-text">Marketing Manager</small>
            </div>
        </div>
        <div class="status">
            <small class="grey-text">17kb</small>
        </div>
    </div>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="/admin-assets/app-assets/images/icon/doc-image.png" width="24"
                                     height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                    Generator</span>
                <small class="grey-text">FontEnd Developer</small>
            </div>
        </div>
        <div class="status">
            <small class="grey-text">550kb</small>
        </div>
    </div>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="/admin-assets/app-assets/images/icon/xls-image.png" width="24"
                                     height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File
                    Uploaded</span>
                <small class="grey-text">Digital Marketing Manager</small>
            </div>
        </div>
        <div class="status">
            <small class="grey-text">20kb</small>
        </div>
    </div>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="/admin-assets/app-assets/images/icon/jpg-image.png" width="24"
                                     height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna
                    Strong</span>
                <small class="grey-text">Web Designer</small>
            </div>
        </div>
        <div class="status">
            <small class="grey-text">37kb</small>
        </div>
    </div>
</a></li>
<li class="auto-suggestion-title"><a class="collection-item" href="#">
    <h6 class="search-title">MEMBERS</h6>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                                     src="/admin-assets/app-assets/images/avatar/avatar-7.png" width="30"
                                     alt="sample image">
            </div>
            <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span>
                <small
                        class="grey-text">UI designer
                </small>
            </div>
        </div>
    </div>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                                     src="/admin-assets/app-assets/images/avatar/avatar-8.png" width="30"
                                     alt="sample image">
            </div>
            <div class="member-info display-flex flex-column"><span class="black-text">Michal
                    Clark</span>
                <small class="grey-text">FontEnd Developer</small>
            </div>
        </div>
    </div>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                                     src="/admin-assets/app-assets/images/avatar/avatar-10.png" width="30"
                                     alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Milena
                    Gibson</span>
                <small class="grey-text">Digital Marketing</small>
            </div>
        </div>
    </div>
</a></li>
<li class="auto-suggestion"><a class="collection-item" href="#">
    <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                                     src="/admin-assets/app-assets/images/avatar/avatar-12.png" width="30"
                                     alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna
                    Strong</span>
                <small class="grey-text">Web Designer</small>
            </div>
        </div>
    </div>
</a></li>
</ul>
<ul class="display-none" id="page-search-title">
<li class="auto-suggestion-title"><a class="collection-item" href="#">
    <h6 class="search-title">PAGES</h6>
</a></li>
</ul>
<ul class="display-none" id="search-not-found">
<li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span
            class="material-icons">error_outline</span><span
            class="member-info">No results found.</span></a>
</li>
</ul>


@include('Theme.common-template.admin-sidebar')

<div id="main">
<div class="row">
<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
<div class="col s12">
    <div class="container">
        <!-- Contact Us -->
        <div id="contact-us" class="section">
            <div class="app-wrapper">
                <div class="contact-header">
                    <div class="row contact-us ml-0 mr-0">
                        <div class="col s12 m12 l4 sidebar-title">
                            <h5 class="m-0"><i class="material-icons contact-icon vertical-text-top">mail_outline</i>
                                Contact
                                Us</h5>
                            <p class="m-0 font-weight-500 mt-6 hide-on-med-and-down text-ellipsis">Do you
                                have any query?</p>
                            <span class="social-icons hide-on-med-and-down"><i
                                        class="fab fa-behance"></i> <i
                                        class="fab fa-dribbble ml-5"></i>
<i class="fab fa-facebook-f ml-5"></i> <i class="fab fa-instagram ml-5"></i></span>
                        </div>
                        <div class="col s12 m12 l8 form-header">
                            <h6 class="form-header-text"><i class="material-icons"> mail_outline </i> Write
                                us a few words about your questions/query.</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Sidenav -->
                <div id="sidebar-list" class="row contact-sidenav ml-0 mr-0">
                    <div class="col s12 m12 l4">
                        <!-- Sidebar Area Starts -->
                        <div class="sidebar-left sidebar-fixed">
                            <div class="sidebar">
                                <div class="sidebar-content">
                                    <div class="sidebar-menu list-group position-relative">
                                        <div class="sidebar-list-padding app-sidebar contact-app-sidebar"
                                             id="contact-sidenav">
                                            <ul class="contact-list display-grid">
                                                <li>
                                                    <h5 class="m-0">What will be next step?</h5>
                                                </li>
                                                <li>
                                                    <h6 class="mt-5 line-height">You are one step closer to
                                                        solve your query. Our Admin Support will contact you
                                                        via Email in a mean while.</h6>
                                                </li>
                                                <li>
                                                    <hr class="mt-5">
                                                </li>
                                            </ul>
                                            <div class="row">
                                                <!-- Place -->
                                                <div class="col s12 place mt-4 p-0">
                                                    <div class="col s2 m2 l2"><i class="material-icons">
                                                            place </i></div>
                                                    <div class="col s10 m10 l10">
                                                        <p class="m-0">Karachi, Sindh<br> Pakistan</p>
                                                    </div>
                                                </div>
                                                <!-- Phone -->
                                                <div class="col s12 phone mt-4 p-0">
                                                    <div class="col s2 m2 l2"><i class="material-icons">
                                                            call </i></div>
                                                    <div class="col s10 m10 l10">
                                                        <p class="m-0"><a href="tel:+923362891707">+92-336-2891707</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Mail -->
                                                <div class="col s12 mail mt-4 p-0">
                                                    <div class="col s2 m2 l2"><i class="material-icons">
                                                            mail_outline </i></div>
                                                    <div class="col s10 m10 l10">
                                                        <p class="m-0"><a
                                                                    href="mailto:k163893@nu.edu.pk">k163893@nu.edu.pk</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#" data-target="contact-sidenav" class="sidenav-trigger"><i
                                                class="material-icons">menu</i></a>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Area Ends -->
                    </div>
                    <div class="col s12 m12 l8 contact-form margin-top-contact">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col m6 s12">
                                        <input id="name" type="text" class="validate">
                                        <label for="name">Your Name</label>
                                    </div>
                                    <div class="input-field col m6 s12">
                                        <input id="email" type="text" class="validate">
                                        <label for="email">Your e-mail</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m6 s12">
                                        <input id="company" type="text" class="validate">
                                        <label for="company">Company</label>
                                    </div>
                                    <div class="input-field col m6 s12">
                                        <input id="subject" type="text" class="validate">
                                        <label for="subject">Subject</label>
                                    </div>
                                    <div class="input-field col s12 width-100">
                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Textarea</label>
                                        <a class="waves-effect waves-light btn">Send</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- START RIGHT SIDEBAR NAV -->
        <aside id="right-sidebar-nav">
            <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                <div class="row">
                    <div class="slide-out-right-title">
                        <div class="col s12 border-bottom-1 pb-0 pt-1">
                            <div class="row">
                                <div class="col s2 pr-0 center">
                                    <i class="material-icons vertical-text-middle"><a href="#"
                                                                                      class="sidenav-close">clear</a></i>
                                </div>
                                <div class="col s10 pl-0">
                                    <ul class="tabs">
                                        <li class="tab col s4 p-0">
                                            <a href="#messages" class="active">
                                                <span>Messages</span>
                                            </a>
                                        </li>
                                        <li class="tab col s4 p-0">
                                            <a href="#settings">
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li class="tab col s4 p-0">
                                            <a href="#activity">
                                                <span>Activity</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-out-right-body row pl-3">
                        <div id="messages" class="col s12 pb-0">
                            <div class="collection border-none mb-0">
                                <input class="header-search-input mt-4 mb-2" type="text" name="Search"
                                       placeholder="Search Messages"/>
                                <ul class="collection right-sidebar-chat p-0 mb-0">
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-7.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Elizabeth Elliott</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank
                                                you</p>
                                        </div>
                                        <span class="secondary-content medium-small">5.00 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-1.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Mary Adams</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello
                                                Boo</p>
                                        </div>
                                        <span class="secondary-content medium-small">4.14 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-off avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-2.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Caleb Richards</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello
                                                Boo</p>
                                        </div>
                                        <span class="secondary-content medium-small">4.14 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-3.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Caleb Richards</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny
                                                !</p>
                                        </div>
                                        <span class="secondary-content medium-small">9.00 PM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-4.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">June Lane</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh
                                                God</p>
                                        </div>
                                        <span class="secondary-content medium-small">4.14 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-off avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-5.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Edward Fletcher</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love
                                                you</p>
                                        </div>
                                        <span class="secondary-content medium-small">5.15 PM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-6.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Crystal Bates</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can
                                                we</p>
                                        </div>
                                        <span class="secondary-content medium-small">8.00 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-off avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-7.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Nathan Watts</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                Great!</p>
                                        </div>
                                        <span class="secondary-content medium-small">9.53 PM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-off avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-8.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Willard Wood</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do
                                                it</p>
                                        </div>
                                        <span class="secondary-content medium-small">4.20 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-1.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Ronnie Ellis</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got
                                                that</p>
                                        </div>
                                        <span class="secondary-content medium-small">5.20 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-9.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Daniel Russell</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank
                                                you</p>
                                        </div>
                                        <span class="secondary-content medium-small">12.00 AM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-off avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-10.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Sarah Graves</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay
                                                you</p>
                                        </div>
                                        <span class="secondary-content medium-small">11.14 PM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-off avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-11.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Andrew Hoffman</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can
                                                do</p>
                                        </div>
                                        <span class="secondary-content medium-small">7.30 PM</span>
                                    </li>
                                    <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img
                src="/admin-assets/app-assets/images/avatar/avatar-12.png" alt="avatar"/>
      <i></i>
    </span>
                                        <div class="user-content">
                                            <h6 class="line-height-0">Camila Lynch</h6>
                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave
                                                it</p>
                                        </div>
                                        <span class="secondary-content medium-small">2.00 PM</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="settings" class="col s12">
                            <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
                            <ul class="collection border-none">
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Notifications</span>
                                        <div class="switch right">
                                            <label>
                                                <input checked type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Show recent activity</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Show recent activity</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Show Task statistics</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Show your emails</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Email Notifications</span>
                                        <div class="switch right">
                                            <label>
                                                <input checked type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                            <ul class="collection border-none">
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>System Logs</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Error Reporting</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Applications Logs</span>
                                        <div class="switch right">
                                            <label>
                                                <input checked type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Backup Servers</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="collection-item border-none">
                                    <div class="m-0">
                                        <span>Audit Logs</span>
                                        <div class="switch right">
                                            <label>
                                                <input type="checkbox"/>
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="activity" class="col s12">
                            <div class="activity">
                                <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                <ul class="widget-timeline mb-0">
                                    <li class="timeline-items timeline-icon-green active">
                                        <div class="timeline-time">Today</div>
                                        <h6 class="timeline-title">Homepage mockup design</h6>
                                        <p class="timeline-text">Melissa liked your activity.</p>
                                        <div class="timeline-content orange-text">Important</div>
                                    </li>
                                    <li class="timeline-items timeline-icon-cyan active">
                                        <div class="timeline-time">10 min</div>
                                        <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                                        <p class="timeline-text">Here are some news feed interactions
                                            concepts.</p>
                                        <div class="timeline-content green-text">Resolved</div>
                                    </li>
                                    <li class="timeline-items timeline-icon-red active">
                                        <div class="timeline-time">30 mins</div>
                                        <h6 class="timeline-title">12 new users registered</h6>
                                        <p class="timeline-text">Here are some news feed interactions
                                            concepts.</p>
                                        <div class="timeline-content">
                                            <img src="/admin-assets/app-assets/images/icon/pdf.png"
                                                 alt="document" height="30" width="25"
                                                 class="mr-1">Registration.doc
                                        </div>
                                    </li>
                                    <li class="timeline-items timeline-icon-indigo active">
                                        <div class="timeline-time">2 Hrs</div>
                                        <h6 class="timeline-title">Tina is attending your activity</h6>
                                        <p class="timeline-text">Here are some news feed interactions
                                            concepts.</p>
                                        <div class="timeline-content">
                                            <img src="/admin-assets/app-assets/images/icon/pdf.png"
                                                 alt="document" height="30" width="25"
                                                 class="mr-1">Activity.doc
                                        </div>
                                    </li>
                                    <li class="timeline-items timeline-icon-orange">
                                        <div class="timeline-time">5 hrs</div>
                                        <h6 class="timeline-title">Josh is now following you</h6>
                                        <p class="timeline-text">Here are some news feed interactions
                                            concepts.</p>
                                        <div class="timeline-content red-text">Pending</div>
                                    </li>
                                </ul>
                                <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                <ul class="widget-timeline mb-0">
                                    <li class="timeline-items timeline-icon-green active">
                                        <div class="timeline-time">Just now</div>
                                        <h6 class="timeline-title">New order received urgent</h6>
                                        <p class="timeline-text">Melissa liked your activity.</p>
                                        <div class="timeline-content orange-text">Important</div>
                                    </li>
                                    <li class="timeline-items timeline-icon-cyan active">
                                        <div class="timeline-time">05 min</div>
                                        <h6 class="timeline-title">System shutdown.</h6>
                                        <p class="timeline-text">Here are some news feed interactions
                                            concepts.</p>
                                        <div class="timeline-content blue-text">Urgent</div>
                                    </li>
                                    <li class="timeline-items timeline-icon-red">
                                        <div class="timeline-time">20 mins</div>
                                        <h6 class="timeline-title">Database overloaded 89%</h6>
                                        <p class="timeline-text">Here are some news feed interactions
                                            concepts.</p>
                                        <div class="timeline-content">
                                            <img src="/admin-assets/app-assets/images/icon/pdf.png"
                                                 alt="document" height="30" width="25"
                                                 class="mr-1">Database-log.doc
                                        </div>
                                    </li>
                                </ul>
                                <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                <ul class="widget-timeline mb-0">
                                    <li class="timeline-items timeline-icon-green active">
                                        <div class="timeline-time">10 min</div>
                                        <h6 class="timeline-title">System error</h6>
                                        <p class="timeline-text">Melissa liked your activity.</p>
                                        <div class="timeline-content red-text">Error</div>
                                    </li>
                                    <li class="timeline-items timeline-icon-cyan">
                                        <div class="timeline-time">1 min</div>
                                        <h6 class="timeline-title">Production server down.</h6>
                                        <p class="timeline-text">Here are some news feed interactions
                                            concepts.</p>
                                        <div class="timeline-content blue-text">Urgent</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Out Chat -->
            <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                    <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                </li>
                <li class="chat-body">
                    <ul class="collection">
                        <li class="collection-item display-flex avatar pl-5 pb-0"
                            data-target="slide-out-chat">
<span class="avatar-status avatar-online avatar-50"><img
          src="/admin-assets/app-assets/images/avatar/avatar-7.png"
          alt="avatar"/>
</span>
                            <div class="user-content speech-bubble">
                                <p class="medium-small">hello!</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                            data-target="slide-out-chat">
                            <div class="user-content speech-bubble-right">
                                <p class="medium-small">How can we help? We're here for you!</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0"
                            data-target="slide-out-chat">
<span class="avatar-status avatar-online avatar-50"><img
          src="/admin-assets/app-assets/images/avatar/avatar-7.png"
          alt="avatar"/>
</span>
                            <div class="user-content speech-bubble">
                                <p class="medium-small">I am looking for the best admin template.?</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                            data-target="slide-out-chat">
                            <div class="user-content speech-bubble-right">
                                <p class="medium-small">Materialize admin is the responsive materializecss
                                    admin template.</p>
                            </div>
                        </li>

                        <li class="collection-item display-grid width-100 center-align">
                            <p>8:20 a.m.</p>
                        </li>

                        <li class="collection-item display-flex avatar pl-5 pb-0"
                            data-target="slide-out-chat">
<span class="avatar-status avatar-online avatar-50"><img
          src="/admin-assets/app-assets/images/avatar/avatar-7.png"
          alt="avatar"/>
</span>
                            <div class="user-content speech-bubble">
                                <p class="medium-small">Ohh! very nice</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                            data-target="slide-out-chat">
                            <div class="user-content speech-bubble-right">
                                <p class="medium-small">Thank you.</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0"
                            data-target="slide-out-chat">
<span class="avatar-status avatar-online avatar-50"><img
          src="/admin-assets/app-assets/images/avatar/avatar-7.png"
          alt="avatar"/>
</span>
                            <div class="user-content speech-bubble">
                                <p class="medium-small">How can I purchase it?</p>
                            </div>
                        </li>

                        <li class="collection-item display-grid width-100 center-align">
                            <p>9:00 a.m.</p>
                        </li>

                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                            data-target="slide-out-chat">
                            <div class="user-content speech-bubble-right">
                                <p class="medium-small">From ThemeForest.</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                            data-target="slide-out-chat">
                            <div class="user-content speech-bubble-right">
                                <p class="medium-small">Only $24</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0"
                            data-target="slide-out-chat">
<span class="avatar-status avatar-online avatar-50"><img src=""
                                                       alt="avatar"/>
</span>
                            <div class="user-content speech-bubble">
                                <p class="medium-small">Ohh! Thank you.</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar pl-5 pb-0"
                            data-target="slide-out-chat">
<span class="avatar-status avatar-online avatar-50"><img
          src="/admin-assets/app-assets/images/avatar/avatar-7.png"
          alt="avatar"/>
</span>
                            <div class="user-content speech-bubble">
                                <p class="medium-small">I will purchase it for sure.</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                            data-target="slide-out-chat">
                            <div class="user-content speech-bubble-right">
                                <p class="medium-small">Great, Feel free to get in touch on</p>
                            </div>
                        </li>
                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                            data-target="slide-out-chat">
                            <div class="user-content speech-bubble-right">
                                <p class="medium-small">https://pixinvent.ticksy.com/</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="center-align chat-footer">
                    <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                        <div class="input-field">
                            <input id="icon_prefix" type="text" class="search"/>
                            <label for="icon_prefix">Type here..</label>
                            <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                        </div>
                    </form>
                </li>
            </ul>
        </aside>
        <!-- END RIGHT SIDEBAR NAV -->
    </div>
    <div class="content-overlay"></div>
</div>
</div>
</div>


@include('Theme.common-template.admin-footer')

</body>

<script src="{{asset('/admin-assets/app-assets/js/vendors.min.js')}}"></script>

<script src="{{asset('/admin-assets/app-assets/js/plugins.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/js/search.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/js/custom/custom-script.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/js/scripts/customizer.js')}}"></script>

<script src="{{asset('/admin-assets/app-assets/js/scripts/app-contacts.js')}}"></script>

</html>

