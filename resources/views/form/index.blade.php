@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة المقدمة</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة المقدمة</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <button class="btn btn-info mb-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">إضافة مقدمة جديدة</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
               <br>

            </div>
        </div>
    </div>

    <div class="content-body">
        <!-- Basic Checkbox start -->
        <section class="basic-checkbox">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Simple Checkboxes</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset class="checkboxsas">
                                    <label>
                                        <input type="checkbox" value=""> I am unchecked Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" checked> I am checked Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled> I am disabled Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled checked> I am checked &amp; disabled Checkbox
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Right Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Simple Right side checkboxes with <code>.right-checkbox</code>                      wrapper class.</p>
                                <fieldset class="right-checkbox">
                                    <label>
                                        <input type="checkbox" value=""> I am unchecked Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="right-checkbox">
                                    <label>
                                        <input type="checkbox" value="" checked> I am checked Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="right-checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled> I am disabled Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="right-checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled checked> I am checked &amp; disabled Checkbox
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>.custom-input.custom-checkbox</code> as a single wrapper
                                    &amp; add <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code>                      for better output. Also use <code>.custom-control-description</code>                      class for checkbox description.</p>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Custom checkbox checked</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Custom checkbox disabled</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked name="customCheck4" id="customCheck4"
                                               disabled>
                                        <label class="custom-control-label" for="fixed-layout">Custom checkbox checked &amp; disabled</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Right Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>.custom-input.custom-checkbox</code> as a single wrapper
                                    &amp; add <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code>                      for better output &amp; wrap with <code>right-checkbox</code>                      for right aligned checkbox.</p>
                                <fieldset class="right-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheckRight" id="customCheckRight1">
                                        <label class="custom-control-label" for="customCheckRight1">Custom checkbox</label>
                                    </div>
                                </fieldset>
                                <fieldset class="right-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheckRight" id="customCheckRight2"
                                               checked>
                                        <label class="custom-control-label" for="customCheckRight2">Custom checkbox checked</label>
                                    </div>
                                </fieldset>
                                <fieldset class="right-checkbox disabled">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheckRight" id="customCheckRight3"
                                               disabled>
                                        <label class="custom-control-label" for="customCheckRight3">Custom checkbox disabled</label>
                                    </div>
                                </fieldset>
                                <fieldset class="right-checkbox disabled">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked name="customCheckRight"
                                               id="customCheckRight4" disabled="">
                                        <label class="custom-control-label" for="customCheckRight4">Custom checkbox checked &amp; disabled</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Checkbox end -->
        <!-- Basic Radio Buttons start -->
        <section class="basic-radios">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Simple Radio Buttons</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Radio Buttons</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset class="radio">
                                    <label>
                                        <input type="radio" name="radio" value=""> I am unchecked Radio Button
                                    </label>
                                </fieldset>
                                <fieldset class="radio">
                                    <label>
                                        <input type="radio" name="radio" value="" checked> I am checked Radio Button
                                    </label>
                                </fieldset>
                                <fieldset class="radio disabled">
                                    <label>
                                        <input type="radio" name="radio" value="" disabled> I am disabled Radio Button
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Right Radio Buttons</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Simple Radio Button with right align using <code>.right-radio</code>                      class.</p>
                                <fieldset class="right-radio">
                                    <label>
                                        <input type="radio" name="radio1" value=""> I am unchecked Radio Button
                                    </label>
                                </fieldset>
                                <fieldset class="right-radio">
                                    <label>
                                        <input type="radio" name="radio1" value="" checked> I am checked Radio Button
                                    </label>
                                </fieldset>
                                <fieldset class="right-radio disabled">
                                    <label>
                                        <input type="radio" name="radio1" value="" disabled> I am disabled Radio Button
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Radio Buttons</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>.custom-input.custom-radio</code> as a single wrapper
                                    &amp; add <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code>                      for better output. Also use <code>.custom-control-description</code>                      class for radio description.</p>
                                <fieldset>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1">
                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2"
                                               checked>
                                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="customRadio" id="customRadio3"
                                               disabled>
                                        <label class="custom-control-label" for="customRadio3">Or toggle this other custom radio</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Right Radio Buttons</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>.c-input.c-radio</code> as a single wrapper &amp; add
                                    <code>&lt;span class="c-indicator"&gt;&lt;/span&gt;</code>                      for better output &amp; wrap with <code>right-radio</code>                      for right aligned radio.</p>
                                <fieldset class="right-radio">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="customRadioRight" id="customRadioRight1">
                                        <label class="custom-control-label" for="customRadioRight1">Toggle this custom radio</label>
                                    </div>
                                </fieldset>
                                <fieldset class="right-radio">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="customRadioRight" id="customRadioRight2"
                                               checked>
                                        <label class="custom-control-label" for="customRadioRight2">Or toggle this other custom radio</label>
                                    </div>
                                </fieldset>
                                <fieldset class="right-radio disabled">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="customRadioRight" id="customRadioRight3"
                                               disabled>
                                        <label class="custom-control-label" for="customRadioRight3">Or toggle this other custom radio</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Radio Buttons end -->
        <!-- iCheck Checkbox start -->
        <section class="icheck-checkbox">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">iCheck Checkbox</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Skin iCheck</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.icheck_minimal.skin</code> for this style of
                                    checkbox.
                                </p>
                                <div class="row icheck_minimal skin">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="checkbox" id="input-5">
                                            <label for="input-5">Checkbox</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-6" checked>
                                            <label for="input-6">Checkbox Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-7" disabled>
                                            <label for="input-7">Checkbox Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-8" checked disabled>
                                            <label for="input-8">Checkbox Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state icheckbox_minimal mr-1"></div>
                                                <label>Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_minimal hover mr-1"></div>
                                                <label>Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_minimal checked mr-1"></div>
                                                <label>Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_minimal disabled mr-1"></div>
                                                <label>Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_minimal checked disabled mr-1"></div>
                                                <label>Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li class="active" title="Black"></li>
                                                <li class="red" title="Red"></li>
                                                <li class="green" title="Green"></li>
                                                <li class="blue" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Square Skin iCheck</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.skin.skin-square</code> for square and colored
                                    checkbox. Have to do color changes using JS.</p>
                                <div class="row skin skin-square">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="checkbox" id="input-11">
                                            <label for="input-11">Checkbox</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-12" checked>
                                            <label for="input-12">Checkbox Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-13" disabled>
                                            <label for="input-13">Checkbox Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-14" checked disabled>
                                            <label for="input-14">Checkbox Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state icheckbox_square-red mr-1"></div>
                                                <label>Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_square-red hover mr-1"></div>
                                                <label>Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_square-red checked mr-1"></div>
                                                <label>Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_square-red disabled mr-1"></div>
                                                <label>Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_square-red checked disabled mr-1"></div>
                                                <label>Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li title="Black"></li>
                                                <li class="red active" title="Red"></li>
                                                <li class="green" title="Green"></li>
                                                <li class="blue" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Flat Skin iCheck</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.skin.skin-flat</code> for Flat colored checkbox.
                                    Have to do color changes using JS.</p>
                                <div class="row skin skin-flat">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="checkbox" id="input-15">
                                            <label for="input-15">Checkbox</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-16" checked>
                                            <label for="input-16">Checkbox Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-17" disabled>
                                            <label for="input-17">Checkbox Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-18" checked disabled>
                                            <label for="input-18">Checkbox Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state icheckbox_flat-green mr-1"></div>
                                                <label>Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_flat-green hover mr-1"></div>
                                                <label>Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_flat-green checked mr-1"></div>
                                                <label>Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_flat-green disabled mr-1"></div>
                                                <label>Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_flat-green checked disabled mr-1"></div>
                                                <label>Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li title="Black"></li>
                                                <li class="red" title="Red"></li>
                                                <li class="green active" title="Green"></li>
                                                <li class="blue" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Line iCheck Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.skin.skin-line</code> for line checkbox. Have
                                    to do color changes using JS.</p>
                                <div class="row skin skin-line">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="checkbox" id="input-1">
                                            <label for="input-1">Checkbox</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-2" checked>
                                            <label for="input-2">Checkbox Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-3" disabled>
                                            <label for="input-3">Checkbox Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-4" checked disabled>
                                            <label for="input-4">Checkbox Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state icheckbox_line-blue mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Normal State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_line-blue hover mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Hover State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_line-blue checked mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Checked State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_line-blue disabled mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Disabled State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_line-blue checked disabled mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Checked &amp; Disabled State
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li title="Black"></li>
                                                <li class="red" title="Red"></li>
                                                <li class="green" title="Green"></li>
                                                <li class="blue active" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card text-white bg-blue-grey bg-darken-4">
                        <div class="card-header">
                            <h4 class="card-title bg-blue-grey bg-darken-4">Polaris Skin iCheck</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="white">Wrap with <code>.skin.skin-polaris</code> for polaris checkbox.</p>
                                <div class="row skin skin-polaris">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="checkbox" id="input-21">
                                            <label class="white" for="input-21">Checkbox</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-22" checked>
                                            <label class="white" for="input-22">Checkbox Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-23" disabled>
                                            <label class="white" for="input-23">Checkbox Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-24" checked disabled>
                                            <label class="white" for="input-24">Checkbox Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state icheckbox_polaris mr-1"></div>
                                                <label class="white">Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_polaris hover mr-1"></div>
                                                <label class="white">Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_polaris checked mr-1"></div>
                                                <label class="white">Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_polaris disabled mr-1"></div>
                                                <label class="white">Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_polaris checked disabled mr-1"></div>
                                                <label class="white">Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card text-white bg-blue-grey bg-darken-4">
                        <div class="card-header">
                            <h4 class="card-title bg-blue-grey bg-darken-4">Futurico Skin iCheck</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="white">Wrap with <code>.skin.skin-futurico</code> for futurico checkbox.</p>
                                <div class="row skin skin-futurico">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="checkbox" id="input-25">
                                            <label class="white" for="input-25">Checkbox</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-26" checked>
                                            <label class="white" for="input-26">Checkbox Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-27" disabled>
                                            <label class="white" for="input-27">Checkbox Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="input-28" checked disabled>
                                            <label class="white" for="input-28">Checkbox Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state icheckbox_futurico mr-1"></div>
                                                <label class="white">Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_futurico hover mr-1"></div>
                                                <label class="white">Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_futurico checked mr-1"></div>
                                                <label class="white">Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_futurico disabled mr-1"></div>
                                                <label class="white">Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state icheckbox_futurico checked disabled mr-1"></div>
                                                <label class="white">Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- iCheck Checkbox end -->
        <!-- iCheck Radio start -->
        <section class="icheck-radio">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">iCheck Radio Buttons</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Minimal iCheck Radio Option</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.icheck_minimal</code> with <code>.skin</code>                      to use another icheck radio style.</p>
                                <div class="row icheck_minimal skin">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="radio" name="input-radio-2" id="input-radio-5">
                                            <label for="input-radio-5">Radio Button</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-2" id="input-radio-6" checked>
                                            <label for="input-radio-6">Radio Button Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-2" id="input-radio-7" disabled>
                                            <label for="input-radio-7">Radio Button Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" id="input-radio-8" checked disabled>
                                            <label for="input-radio-8">Radio Button Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state iradio_minimal mr-1"></div>
                                                <label>Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_minimal hover mr-1"></div>
                                                <label>Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_minimal checked mr-1"></div>
                                                <label>Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_minimal disabled mr-1"></div>
                                                <label>Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_minimal checked disabled mr-1"></div>
                                                <label>Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li class="active" title="Black"></li>
                                                <li class="red" title="Red"></li>
                                                <li class="green" title="Green"></li>
                                                <li class="blue" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Filled Skin iCheck Radio</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.skin.skin-square</code> for square and colored
                                    radio. Have to do color changes using JS.</p>
                                <div class="row skin skin-square">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="radio" name="input-radio-3" id="input-radio-11">
                                            <label for="input-radio-11">Radio Button</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-3" id="input-radio-12" checked>
                                            <label for="input-radio-12">Radio Button Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-3" id="input-radio-13" disabled>
                                            <label for="input-radio-13">Radio Button Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" id="input-radio-14" checked disabled>
                                            <label for="input-radio-14">Radio Button Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state iradio_square-red mr-1"></div>
                                                <label>Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_square-red hover mr-1"></div>
                                                <label>Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_square-red checked mr-1"></div>
                                                <label>Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_square-red disabled mr-1"></div>
                                                <label>Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_square-red checked disabled mr-1"></div>
                                                <label>Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li title="Black"></li>
                                                <li class="red active" title="Red"></li>
                                                <li class="green" title="Green"></li>
                                                <li class="blue" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Flat Skin iCheck Radio</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.skin.skin-flat</code> for Flat colored radio.
                                    Have to do color changes using JS.</p>
                                <div class="row skin skin-flat">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="radio" name="input-radio-4" id="input-radio-15">
                                            <label for="input-radio-15">Radio Button</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-4" id="input-radio-16" checked>
                                            <label for="input-radio-16">Radio Button Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-4" id="input-radio-17" disabled>
                                            <label for="input-radio-17">Radio Button Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" id="input-radio-18" checked disabled>
                                            <label for="input-radio-18">Radio Button Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state iradio_flat-green mr-1"></div>
                                                <label>Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_flat-green hover mr-1"></div>
                                                <label>Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_flat-green checked mr-1"></div>
                                                <label>Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_flat-green disabled mr-1"></div>
                                                <label>Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_flat-green checked disabled mr-1"></div>
                                                <label>Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li title="Black"></li>
                                                <li class="red" title="Red"></li>
                                                <li class="green active" title="Green"></li>
                                                <li class="blue" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Line iCheck Radio</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Wrap with <code>.skin.skin-line</code> for line Radio. Have to
                                    do color changes using JS.</p>
                                <div class="row skin skin-line">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="radio" name="input-radio-1" id="input-radio-1">
                                            <label for="input-radio-1">Radio Button</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-1" id="input-radio-2" checked>
                                            <label for="input-radio-2">Radio Button Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" id="input-radio-3" disabled>
                                            <label for="input-radio-3">Radio Button Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" id="input-radio-4" checked disabled>
                                            <label for="input-radio-4">Radio Button Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state iradio_line-blue mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Normal State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_line-blue hover mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Hover State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_line-blue checked mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Checked State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_line-blue disabled mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Disabled State
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_line-blue checked disabled mr-1">
                                                    <div class="icheck_line-icon"></div>
                                                    Checked &amp; Disabled State
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset class="colors clear">
                                            <strong>Color schemes</strong>
                                            <ul>
                                                <li title="Black"></li>
                                                <li class="red" title="Red"></li>
                                                <li class="green" title="Green"></li>
                                                <li class="blue active" title="Blue"></li>
                                                <li class="aero" title="Aero"></li>
                                                <li class="grey" title="Grey"></li>
                                                <li class="orange" title="Orange"></li>
                                                <li class="yellow" title="Yellow"></li>
                                                <li class="pink" title="Pink"></li>
                                                <li class="purple" title="Purple"></li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card text-white bg-blue-grey bg-darken-4">
                        <div class="card-header">
                            <h4 class="card-title bg-blue-grey bg-darken-4">Polaris Skin iCheck Radio</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="white">Wrap with <code>.skin.skin-polaris</code> for polaris radio.</p>
                                <div class="row skin skin-polaris">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="radio" name="input-radio-5" id="input-radio-21">
                                            <label class="white" for="input-radio-21">Radio Button</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-5" id="input-radio-22" checked>
                                            <label class="white" for="input-radio-22">Radio Button Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-5" id="input-radio-23" disabled>
                                            <label class="white" for="input-radio-23">Radio Button Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" id="input-radio-24" checked disabled>
                                            <label class="white" for="input-radio-24">Radio Button Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state iradio_polaris mr-1"></div>
                                                <label class="white">Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_polaris hover mr-1"></div>
                                                <label class="white">Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_polaris checked mr-1"></div>
                                                <label class="white">Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_polaris disabled mr-1"></div>
                                                <label class="white">Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_polaris checked disabled mr-1"></div>
                                                <label class="white">Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card text-white bg-blue-grey bg-darken-4">
                        <div class="card-header">
                            <h4 class="card-title bg-blue-grey bg-darken-4">Futurico Skin iCheck Radio</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="white">Wrap with <code>.skin.skin-futurico</code> for futurico radio.</p>
                                <div class="row skin skin-futurico">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="radio" name="input-radio-6" id="input-radio-25">
                                            <label class="white" for="input-radio-25">Radio Button</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-6" id="input-radio-26" checked>
                                            <label class="white" for="input-radio-26">Radio Button Checked</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" name="input-radio-6" id="input-radio-27" disabled>
                                            <label class="white" for="input-radio-27">Radio Button Disabled</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="radio" id="input-radio-28" checked disabled>
                                            <label class="white" for="input-radio-28">Radio Button Checked &amp; Disabled</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="skin-states">
                                            <fieldset>
                                                <div class="state iradio_futurico mr-1"></div>
                                                <label class="white">Normal State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_futurico hover mr-1"></div>
                                                <label class="white">Hover State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_futurico checked mr-1"></div>
                                                <label class="white">Checked State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_futurico disabled mr-1"></div>
                                                <label class="white">Disabled State</label>
                                            </fieldset>
                                            <fieldset>
                                                <div class="state iradio_futurico checked disabled mr-1"></div>
                                                <label class="white">Checked &amp; Disabled State</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- iCheck Radio end -->
        <!-- Color Checkboxes start -->
        <section class="input-type-options">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Color Checkboxes</h4>
                    <p>Add <code>.bg-COLOR</code> to span to set according to theme color.</p>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Template Color Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input bg-primary" name="colorCheck"
                                               id="colorCheck1">
                                        <label class="custom-control-label" for="colorCheck1">Primary Checkbox</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input bg-success" name="colorCheck"
                                               id="colorCheck2" checked>
                                        <label class="custom-control-label" for="colorCheck2">Success Checkbox</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input bg-danger" name="colorCheck" id="colorCheck3">
                                        <label class="custom-control-label" for="colorCheck3">Danger Checkbox</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Another Template color checkbox example</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input bg-info" name="colorCheck" id="colorCheck4"
                                               checked>
                                        <label class="custom-control-label" for="colorCheck4">Information Checkbox</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input bg-warning" name="colorCheck"
                                               id="colorCheck5">
                                        <label class="custom-control-label" for="colorCheck5">Warning Checkbox</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input bg-purple" name="colorCheck" id="colorCheck6">
                                        <label class="custom-control-label" for="colorCheck6">Custom color purple</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Color Checkboxes end -->
        <!-- Color Radio start -->
        <section class="color-radio">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Custom Bootstrap Color Radio Buttons</h4>
                    <p>Add <code>.bg-COLOR</code> to span to set according to theme color.</p>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Template color Radio Button</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                        <input type="radio" class="custom-control-input bg-primary" name="colorRadio" id="colorRadio1">
                                        <label class="custom-control-label" for="colorRadio1">Primary Radio</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                        <input type="radio" class="custom-control-input bg-success" name="colorRadio" id="colorRadio2">
                                        <label class="custom-control-label" for="colorRadio2">Success Radio</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                        <input type="radio" class="custom-control-input bg-danger" name="colorRadio" id="colorRadio3">
                                        <label class="custom-control-label" for="colorRadio3">Danger Radio</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Another Template color Radio example</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                        <input type="radio" class="custom-control-input bg-info" name="colorRadio" id="colorRadio4">
                                        <label class="custom-control-label" for="colorRadio4">Information Radiobox</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                        <input type="radio" class="custom-control-input bg-warning" checked name="colorRadio"
                                               id="colorRadio5">
                                        <label class="custom-control-label" for="colorRadio5">Warning Radiobox</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                        <input type="radio" class="custom-control-input bg-pink" name="colorRadio" id="colorRadio6">
                                        <label class="custom-control-label" for="colorRadio6">Custom color pink</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Color Radio end -->
        <!-- Inline Checkbox start -->
        <section class="inline-checkbox">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Inline Checkboxes</h4>
                    <p>Add <code>.inline</code> class to the checkbox wrapper for inline checkbox.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Inline Checkboxes</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="d-inline-block custom-control custom-checkbox mr-1">
                                    <input type="checkbox" class="custom-control-input" name="colorCheck" id="checkbox1">
                                    <label class="custom-control-label" for="checkbox1">Unchecked custom checkbox</label>
                                </div>
                                <div class="d-inline-block custom-control custom-checkbox mr-1">
                                    <input type="checkbox" class="custom-control-input" name="colorCheck" checked id="checkbox2">
                                    <label class="custom-control-label" for="checkbox2">Checked custom checkbox</label>
                                </div>
                                <div class="d-inline-block custom-control custom-checkbox mr-1">
                                    <input type="checkbox" class="custom-control-input" name="colorCheck" id="checkbox3"
                                           disabled>
                                    <label class="custom-control-label" for="checkbox3">Disabled custom checkbox</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inline Checkbox end -->
        <!-- Inline Radio start -->
        <section class="inline-radio">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Inline Radio Buttons</h4>
                    <p>Add <code>.inline</code> class to the radio wrapper.</p>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Inline Radio</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="d-inline-block custom-control custom-radio mr-1">
                                    <input type="radio" class="custom-control-input" name="colorRadio" id="radio1">
                                    <label class="custom-control-label" for="radio1">Unchecked custom radio</label>
                                </div>
                                <div class="d-inline-block custom-control custom-radio mr-1">
                                    <input type="radio" class="custom-control-input" name="colorRadio" id="radio2" checked>
                                    <label class="custom-control-label" for="radio2" checked>Checked custom radio</label>
                                </div>
                                <div class="d-inline-block custom-control custom-radio mr-1">
                                    <input type="radio" class="custom-control-input" name="colorRadio" id="radio3" disabled>
                                    <label class="custom-control-label" for="radio3" disabled>Disabled custom radio</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inline Radio end -->
        <!-- Image Checkbox start -->
        <section class="image-checkbox">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Image Checkbox</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Image Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>.img-thumbnail</code> class to &lt;img&gt; tag after
                                    input type checkbox.</p>
                                <fieldset class="form-group">
                                    <label class="btn">
                                        <input type="checkbox" name="chk1" id="item1" value="val1" class="hidden">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="..." class="check img-thumbnail">
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="chk2" id="item2" value="val2" class="hidden" checked>
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="..." class="img-thumbnail">
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="chk3" id="item3" value="val3" class="hidden">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="..." class="check img-thumbnail">
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="chk4" id="item4" value="val4" class="hidden">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="..." class="img-thumbnail">
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Image Checkbox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>.btn-COLORNAME</code> class to wrapper to use theme
                                    colors.
                                </p>
                                <fieldset class="form-group">
                                    <label class="btn">
                                        <input type="checkbox" name="chk5" id="item5" value="val1" class="hidden">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="..." class="img-thumbnail">
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="chk6" id="item6" value="val2" class="hidden">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="..." class="check img-thumbnail">
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="chk7" id="item7" value="val3" class="hidden" checked>
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="..." class="img-thumbnail">
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="chk8" id="item8" value="val4" class="hidden">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="..." class="img-thumbnail">
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Checkbox end -->
    </div>

    <div class="content-body">
        <!-- Dual Listbox start -->
        <section class="basic-dual-listbox">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Dual ListBox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox">
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3" selected="selected">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6" selected="selected">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10" selected="selected">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12" selected="selected">Cologne</option>
                                        <option value="13" selected="selected">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16" selected="selected">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18" selected="selected">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                    </select>
                                    <p class="mt-1">Add <code>.duallistbox</code> class for basic dual listbox.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dual Listbox end -->
        <!-- Dual Listbox Without Filter start -->
        <section class="without-filter">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dual ListBox Without Filter</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox-no-filter">
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3" selected="selected">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6" selected="selected">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10" selected="selected">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12" selected="selected">Cologne</option>
                                        <option value="13" selected="selected">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16" selected="selected">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18" selected="selected">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                    </select>
                                    <p class="mt-1">Add <code>.duallistbox-no-filter</code> class without filter
                                        dual listbox.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dual Listbox Without Filter end -->
        <!-- Dual ListBox with multiple selection start -->
        <section class="with-multi-selection">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dual ListBox with multiple selection</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox-multi-selection">
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3" selected="selected">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6" selected="selected">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10" selected="selected">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12" selected="selected">Cologne</option>
                                        <option value="13" selected="selected">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16" selected="selected">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18" selected="selected">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                    </select>
                                    <p class="mt-1">Add <code>.duallistbox-multi-selection</code> class for Dual
                                        ListBox with Multiple Selection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dual ListBox with multiple selection end -->
        <!-- Dual ListBox with Filter Options start -->
        <section class="with-filter-options">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dual ListBox with Filter Options</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox-with-filter">
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3" selected="selected">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6" selected="selected">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10" selected="selected">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12" selected="selected">Cologne</option>
                                        <option value="13" selected="selected">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16" selected="selected">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18" selected="selected">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                    </select>
                                    <p class="mt-1">Add <code>.duallistbox-with-filter</code> class for basic dual
                                        listbox.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dual ListBox with Filter Options end -->
        <!-- Dual ListBox with Filter Text Options start -->
        <section class="with-filter-text-options">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dual ListBox with Filter Text Options</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox-custom-text">
                                        <option value="option1">Option 1</option>
                                        <option value="option2" selected="selected">Option 2</option>
                                        <option value="option3" selected="selected">Option 3</option>
                                        <option value="option4">Option 4</option>
                                        <option value="option5">Option 5</option>
                                        <option value="option6" selected="selected">Option 6</option>
                                        <option value="option7" selected="selected">Option 7</option>
                                        <option value="option8">Option 8</option>
                                        <option value="option9">Option 9</option>
                                        <option value="option0">Option 10</option>
                                    </select>
                                    <p class="mt-1"> All the listbox labels and placeholders are fully editable
                                        through specified options, Like: <code>filterTextClear, filterPlaceHolder, infoText, infoTextFiltered, infoTextEmpty</code>.
                                        You can use custom language also.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dual ListBox with Filter Text Options end -->
        <!-- Dual ListBox with Minimal Height start -->
        <section class="with-minimal-height">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dual ListBox with Minimal Height</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox-custom-height">
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3" selected="selected">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6" selected="selected">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10" selected="selected">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12" selected="selected">Cologne</option>
                                        <option value="13" selected="selected">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16" selected="selected">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18" selected="selected">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                    </select>
                                    <p class="mt-1">Use <code>selectorMinimalHeight</code> setting option to set
                                        dual listbox custom height.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dual ListBox with Minimal Height end -->
        <!-- Dual ListBox Custom Options start -->
        <section class="with-custom-options">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Custom Options to Dual ListBox</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox-dynamic">
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3" selected="selected">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6" selected="selected">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10" selected="selected">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12" selected="selected">Cologne</option>
                                        <option value="13" selected="selected">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16" selected="selected">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18" selected="selected">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                        <option value="21">Glasgow</option>
                                        <option value="22">Gothenburg</option>
                                        <option value="23" selected="selected">Hamburg</option>
                                        <option value="24">Hannover</option>
                                        <option value="25">Helsinki</option>
                                    </select>
                                </div>
                                <div class="buttons block">
                                    <button type="button" class="btn btn-info duallistbox-add">Add options</button>
                                    <button type="button" class="btn btn-info duallistbox-add-clear">Add with clearing highlights</button>
                                </div>
                                <p class="mt-1"> Add an option to the Listbox Using <code>Add Options</code> button.
                                    Add an option and also clearing highlights of listbox option
                                    using <code>Add with clearing highlight</code> button</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dual ListBox Custom Options end -->
    </div>

    <div class="content-body">
        <!-- horizontal grid start -->
        <section class="horizontal-grid" id="horizontal-grid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Horizontal Grid</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- horizontal grid end -->
        <!-- Grid With Row Label start -->
        <section class="grid-row-label" id="grid-row-label">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grid With Row Label</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grid With Row Label end -->
        <!-- Grid With Label start -->
        <section class="grid-with-label" id="grid-with-label">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grid With Label</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grid With Label end -->
        <!-- Left Right Offset start -->
        <section class="left-right-offset" id="left-right-offset">
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Right Offset</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Left Offset</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-11 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-9 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-7 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-5 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-3 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2 ml-auto0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="11">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Left Right Offset end -->
        <!-- Centered Input start -->
        <section class="checkbox-input-grid" id="checkbox-input-grid">
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Centered Input</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-4 text-right">Label</label>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 text-right">Label</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2 text-right">Label</label>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-1 text-right">Label</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Centered Input with Default label</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-10 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-8 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-6 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-4 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-2 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Centered Input end -->
        <!-- Grid with Row Label start -->
        <section class="grid-with-inline-row-label" id="grid-with-inline-row-label">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grid With Row Label</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <input type="text" class="form-control" placeholder="col-md-1">
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" class="form-control" placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" placeholder="col-md-2">
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" placeholder="col-md-3">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" placeholder="col-md-4">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" placeholder="col-md-5">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grid with Row Label end -->
        <!-- Grid With Inline Labels start -->
        <section class="grid-with-inline-labels" id="grid-with-inline-labels">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grid With Inline Input Label</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-2">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-3">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-4">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-5">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grid With Inline Labels end -->
        <!-- Multiple Inputs with Label start -->
        <section class="multiple-input-with-labels" id="multiple-input-with-labels">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Input With Default Label</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <label>Label </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Multiple width Input Label</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Multiple Inputs with Label end -->
        <!-- Multiple Inputs with Inline Label start -->
        <section class="multiple-input-with-inline-labels" id="multiple-input-with-inline-labels">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Input With Inline Label</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-2">Label </label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2">Multiple width Input Label </label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Multiple Inputs with Inline Label end -->
    </div>

    <div class="content-body">
        <!-- Basic Inputs start -->
        <section class="basic-inputs">
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Input text</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="basicInput">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Input text with help</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <small class="text-muted">eg.<i>someone@example.com</i></small>
                                    <input type="text" class="form-control" id="helpInputTop">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Password</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="password" class="form-control" id="passwordField">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Disabled Input field</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Add attribute <code>disabled</code> to disable input field.</p>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="disabledInput" disabled>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Predefined Input Value</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Add attribute <code>value="VALUE"</code> to set predefined value.</p>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="predefinedInput" value="http://">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Readonly Input field</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Add attribute <code>readonly="readonly"</code> to set field readonly.</p>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="You can't change me. ;)">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input with Placeholder</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="email" class="form-control" id="placeholderInput" placeholder="Enter Email Address">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Maximum Value</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Add attribute <code>maxlength="NUMBER"</code> to input area.</p>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="maxInput" maxlength="6" placeholder="Maximum 6 characters.">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label for="focusInput" class="card-title cursor-pointer">Focus on label click</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>To set focus on label click, use <code>.cursor-pointer</code>                      class.</p>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="focusInput" maxlength="6" placeholder="Field Focus On Label Click.">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Static Text</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <p class="form-control-static" id="staticInput">email@pixinvent.com</p>
                                    <p>To set static text use <code>.form-control-static</code> class.</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="helpInput">Input with Help text at bottom</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput" placeholder="With Help Text">
                                </fieldset>
                                <p class="text-muted">Muted help text using <code>.text-muted</code> class.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="autoOffInput">Autocomplete Disabled</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="autoOffInput" placeholder="Autocomplete is off!"
                                           autocomplete="off">
                                    <p>Add attribute <code>autocomplete="off"</code> to disable Autocomplete.</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Inputs end -->
        <!-- Inputs Type Options start -->
        <section class="input-type-options" id="input-types">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Input Type Options</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="text">Text</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="text"</code></p>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="text" value="Artisanal kale">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="password">Password</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="password"</code></p>
                                <fieldset class="form-group">
                                    <input type="password" class="form-control" id="password" value="hunter2">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="tel">Telephone Number</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="tel"</code></p>
                                <fieldset class="form-group">
                                    <input type="tel" class="form-control" id="tel" value="1-(555)-555-5555">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="email">Email</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="email"</code></p>
                                <fieldset class="form-group">
                                    <input type="email" class="form-control" id="email" value="bootstrap@example.com">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="url">URL</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="url"</code></p>
                                <fieldset class="form-group">
                                    <input type="url" class="form-control" id="url" value="http://getbootstrap.com">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="search">Search</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="search"</code></p>
                                <fieldset class="form-group">
                                    <input type="search" class="form-control" id="search" value="How do I shoot web">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="number">Numbers</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="number"</code></p>
                                <fieldset class="form-group">
                                    <input type="number" class="form-control" id="number" value="43">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="dateTime">Date Time</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="datetime-local"</code></p>
                                <fieldset class="form-group">
                                    <input type="datetime-local" class="form-control" id="dateTime" value="2011-08-19T13:45:00">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="date">Date</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="date"</code></p>
                                <fieldset class="form-group">
                                    <input type="date" class="form-control" id="date" value="2011-08-19">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="time">Time</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="time"</code></p>
                                <fieldset class="form-group">
                                    <input type="time" class="form-control" id="time" value="13:45:00">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="week">Week</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="week"</code></p>
                                <fieldset class="form-group">
                                    <input type="week" class="form-control" id="week" value="2011-W33">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="month">Month</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="month"</code></p>
                                <fieldset class="form-group">
                                    <input type="month" class="form-control" id="month" value="2011-08">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="color">Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="color"</code></p>
                                <fieldset class="form-group">
                                    <input type="color" class="form-control" id="color" value="#563d7c">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="range">Range</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Using <code>input type="range"</code></p>
                                <fieldset class="form-group">
                                    <input type="range" class="form-control" id="range" value="50">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inputs Type Options end -->
        <!-- Basic Textarea start -->
        <section class="basic-textarea">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Basic Textarea</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label for="basicTextarea" class="cursor-pointer card-title">Basic Textarea</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label for="placeTextarea" class="cursor-pointer card-title">Textarea with Placeholder</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Simple Textarea"></textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label for="descTextarea" class="cursor-pointer card-title">Textarea with Description</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <p class="text-muted">Textarea description text.</p>
                                    <textarea class="form-control" id="descTextarea" rows="3" placeholder="Textarea with description"></textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Textarea end -->
        <!-- Basic Select start -->
        <section class="basic-select">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Basic Select</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="basicSelect">Basic select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <select class="form-control" id="basicSelect">
                                        <option>Select Option</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="customSelect">Custom select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>To use custom select add class<code>.custom-select</code> to
                                    select.
                                </p>
                                <fieldset class="form-group">
                                    <select class="custom-select" id="customSelect">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="countrySelect">Multiple select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>To use multiple select add an attribute<code> multiple="multiple"</code>.</p>
                                <fieldset class="form-group">
                                    <select class="form-control" id="countrySelect" multiple="multiple">
                                        <option selected="selected">United States</option>
                                        <option>Canada</option>
                                        <option selected="selected">United Kingdom</option>
                                        <option>Japan</option>
                                        <option>Australia</option>
                                        <option>Germany</option>
                                        <option selected="selected">India</option>
                                        <option>Italy</option>
                                        <option>Sweden</option>
                                        <option>France</option>
                                        <option>New Zealand</option>
                                        <option>Switzerland</option>
                                        <option>Russia</option>
                                        <option>England</option>
                                        <option>Norway</option>
                                        <option>Greece</option>
                                        <option>Philippines</option>
                                        <option>Ireland</option>
                                        <option>China</option>
                                        <option>South Korea</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Select end -->
        <!-- Basic Inputs Style start -->
        <section class="basic-inputs-style" id="input-style">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Basic Input Style 2</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-body">
                                <p>Another Input style using <code>.form-group-style</code></p>
                                <fieldset class="form-group form-group-style">
                                    <label for="textbox2">Input text Style 2</label>
                                    <input type="text" class="form-control" id="textbox2">
                                </fieldset>
                                <fieldset class="form-group form-group-style">
                                    <label for="email1">Email</label>
                                    <input type="email" class="form-control" id="email1">
                                </fieldset>
                                <fieldset class="form-group form-group-style">
                                    <label for="password1">Password</label>
                                    <input type="password" class="form-control" id="password1">
                                </fieldset>
                                <fieldset class="form-group form-group-style">
                                    <label for="url1">URL</label>
                                    <input type="url" class="form-control" id="url1">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-body">
                                <p>Another Select style using <code>.form-group-style</code></p>
                                <fieldset class="form-group form-group-style">
                                    <label for="number12">Number</label>
                                    <input type="number" class="form-control" id="number12">
                                </fieldset>
                                <fieldset class="form-group form-group-style    ">
                                    <label for="textarea2">Textarea</label>
                                    <textarea class="form-control" id="textarea2" rows="3"></textarea>
                                </fieldset>
                                <fieldset class="form-group form-group-style    ">
                                    <label for="selectOpt">Select</label>
                                    <select class="form-control" id="selectOpt">
                                        <option>Select Option</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-body">
                                <p>Another types using <code>.form-group-style</code> class.</p>
                                <fieldset class="form-group form-group-style">
                                    <label for="dateTime1">DateTime</label>
                                    <input type="datetime-local" class="form-control" id="dateTime1">
                                </fieldset>
                                <fieldset class="form-group form-group-style">
                                    <label for="date12">Date</label>
                                    <input type="date" class="form-control" id="date12">
                                </fieldset>
                                <fieldset class="form-group form-group-style">
                                    <label for="time12">Time</label>
                                    <input type="time" class="form-control" id="time12">
                                </fieldset>
                                <fieldset class="form-group form-group-style">
                                    <label for="month12">Month</label>
                                    <input type="month" class="form-control" id="month12">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Inputs Style end -->
        <!-- Basic File Browser start -->
        <section class="file-browser">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Basic File Browser</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="exampleInputFile">File input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="file" class="form-control-file" id="exampleInputFile">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic File Input</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic File Browser end -->
        <!-- Inputs Font Options start -->
        <section class="font-options" id="font-options">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Input Font Options</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText">Normal Font</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.font-weight-normal</code> class for normal font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="font-weight-normal form-control" id="inputText" placeholder="Normal Font">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText1">Bold Font</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.font-weight-bold</code> class for bold font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="font-weight-bold form-control" id="inputText1" placeholder="Bold Font">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText2">Italic Font</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.font-weight-italic</code> class for italic font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="font-italic form-control" id="inputText2" placeholder="Italic Font">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText3">Lowercase Font</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.text-lowercase</code> class for lowercase font </p>
                                <fieldset class="form-group">
                                    <input type="text" class="text-lowercase form-control" id="inputText3" placeholder="Lowercase Font">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText4">Capitalized Text</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.text-capitalize</code> class for capitalize font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="text-capitalize form-control" id="inputText4" placeholder="capitalized text">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText5">Uppercased Text</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.text-uppercased</code> class for uppercased font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="text-uppercase form-control" id="inputText5" placeholder="Uppercased Text">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText6">Left Aligned Text</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.text-left</code> class for left align text in input</p>
                                <fieldset class="form-group">
                                    <input type="text" class="text-left form-control" id="inputText6" placeholder="Left Aligned Text">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText7">Center Aligned Text</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.text-center</code> class for center align text in input</p>
                                <fieldset class="form-group">
                                    <input type="text" class="text-center form-control" id="inputText7" placeholder="Center Aligned Text">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText8">Right Aligned Text</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.text-right</code> class for right align text in input</p>
                                <fieldset class="form-group">
                                    <input type="text" class="text-right form-control" id="inputText8" placeholder="Right Aligned Text">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputFont">Large Font</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.font-size-large</code> class for large input font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control text-uppercase font-size-large" id="inputFont"
                                           placeholder="Input With Large Font">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputFont1">Small Font</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.font-size-small</code> class for small input font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="font-size-small form-control" id="inputFont1" placeholder="Input With Small Font">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="inputText9">Extra Small Font</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.font-size-xsmall</code> class for XSmall input font</p>
                                <fieldset class="form-group">
                                    <input type="text" class="font-size-xsmall form-control" id="inputText9" placeholder="Input With Extra Small Font">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inputs Font Options end -->
        <!-- Helper Classes start -->
        <section class="helpers" id="form-helpers">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Basic Form Helpers</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Left</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput1" placeholder="Help Text">
                                    <p class="text-left">
                                        <small class="text-muted">Helper aligned to left</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Center</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput2" placeholder="Help Text">
                                    <p class="text-center">
                                        <small class="text-muted">Helper aligned to center</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Right</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput3" placeholder="Help Text">
                                    <p class="text-right">
                                        <small class="text-muted">Helper aligned to right</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Left with color label</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput4" placeholder="Help Text">
                                    <p class="block-tag text-left">
                                        <small class="badge badge-default badge-info">Helper aligned to left</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Center with color label</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput5" placeholder="Help Text">
                                    <p class="block-tag text-center">
                                        <small class="badge badge-default badge-success">Helper aligned to center</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Right with color label</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput6" placeholder="Help Text">
                                    <p class="block-tag text-right">
                                        <small class="badge badge-default badge-danger">Helper aligned to right</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Left with block color label</h4>
                        </div>
                        <div class="card-blockdy">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput7" placeholder="Help Text class .text-left">
                                    <p class="badge-default badge-info block-tag text-left">
                                        <small class="block-area white">Helper aligned to left</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Center with block color label</h4>
                        </div>
                        <div class="card-blockdy">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput8" placeholder="Help Text class .text-center">
                                    <p class="badge-default badge-success block-tag text-center">
                                        <small class="block-area white">Helper aligned to center</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Helper Right with block color label</h4>
                        </div>
                        <div class="card-blockdy">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="helpInput9" placeholder="Help Text class .text-right">
                                    <p class="badge-default badge-danger block-tag text-right">
                                        <small class="block-area white">Helper aligned to right</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Inline Helper</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="helpInput10" placeholder="Help Text">
                                    </div>
                                    <div class="col-md-4 block-tag">
                                        <small class="text-muted block-area">Inline helper class <code>.block-tag</code></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Inline Helper with color</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="helpInput11" placeholder="Help Text">
                                    </div>
                                    <div class="col-md-4 block-tag">
                                        <small class="badge badge-warning block-area">Inline color helper</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Helper Classes end -->
        <!-- Tooltip start -->
        <section class="tooltip-area">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Inputs With Tooltip</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tooltip On Focus</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" data-toggle="tooltip" data-trigger="focus"
                                           data-placement="top" placeholder="Click on input" data-title="Tooltip on focus">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tooltip On Hover</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" data-toggle="tooltip" data-trigger="hover"
                                           data-placement="top" placeholder="Tooltip on Hover" data-title="Tooltip on hover">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tooltip Bottom</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom"
                                           placeholder="Tooltip at bottom" data-title="Tooltip at Bottom">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tooltip On Right</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="right"
                                           placeholder="Tooltip On Right" data-title="Right Tooltip">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tooltip On Left</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="left"
                                           placeholder="Tooltip on Left" title="" data-original-title="Left Tooltip">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tooltip Top</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="top"
                                           placeholder="Tooltip at top" data-title="Tooltip at Top">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tooltip end -->
        <!-- Input Styling start -->
        <section class="input-styling">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Input Styling</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="roundText">Rounded Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.round</code> class for rounded field</p>
                                <fieldset class="form-group">
                                    <input type="text" id="roundText" class="form-control round" placeholder="Rounded Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="squareText">Squared Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p><code>.square</code> class for squared field</p>
                                <fieldset class="form-group">
                                    <input type="text" id="squareText" class="form-control square" placeholder="Squared Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="regText">Default Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Default Input Field</p>
                                <fieldset class="form-group">
                                    <input type="text" id="regText" class="form-control" placeholder="Default Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Input Styling end -->
        <!-- Column Sizing start -->
        <section class="column-sizing">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Input Column Sizing</h4>
                </div>
            </div>
            <div class="row max-height">
                <div class="col-sm-12 col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="roundText1">Column sizing 1</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" id="roundText1" class="form-control" placeholder=".col-5">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="squareText1">Column sizing 2</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" id="squareText1" class="form-control" placeholder=".col-4">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="regText1">Column sizing 3</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" id="regText1" class="form-control" placeholder=".col-3">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Column Sizing end -->
        <!-- Control Sizing start -->
        <section class="control-sizing">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Control Sizing Options</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="xLarge">Extra Large Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>XLarge Input class <code>.input-xl</code></p>
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control input-xl" id="xLarge" placeholder="XLarge Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="xLargeSelect">Extra Large Select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>XLarge Input class <code>.input-xl</code> for select</p>
                                <fieldset class="form-group position-relative">
                                    <select class="form-control input-xl" id="xLargeSelect">
                                        <option selected>XLarge select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="Large">Large Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Large Input class <code>.input-lg</code></p>
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control input-lg" id="Large" placeholder="Large Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="LargeSelect">Large Select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Large Input class <code>.input-lg</code> for select</p>
                                <fieldset class="form-group position-relative">
                                    <select class="form-control input-lg" id="LargeSelect">
                                        <option selected>Large select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="Default">Default Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control" id="Default" placeholder="Default Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="DefaultSelect">Default Select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <select class="form-control" id="DefaultSelect">
                                        <option selected>Default select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="Small">Small Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Small Input class <code>.input-sm</code></p>
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control input-sm" id="Small" placeholder="Small Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="SmallSelect">Small Select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Small Input class <code>.input-sm</code> for select</p>
                                <fieldset class="form-group position-relative">
                                    <select class="form-control input-sm" id="SmallSelect">
                                        <option selected>Small select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="xSmall">Extra Small Input</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>XSmall Input class <code>.input-xs</code></p>
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control input-xs" id="xSmall" placeholder="XSmall Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="xSmallSelect">Extra Small Select</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>XSmall Input class <code>.input-xs</code> for select</p>
                                <fieldset class="form-group position-relative">
                                    <select class="form-control input-xs" id="xSmallSelect">
                                        <option selected>XSmall select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Control Sizing end -->
        <!-- validations start -->
        <section class="validations" id="validation">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Input Validation States</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title danger" for="inputDanger">
                                <strong>Danger State</strong>
                            </label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group has-danger">
                                    <input type="text" class="form-control form-control-danger" id="inputDanger">
                                    <p class="text-right">
                                        <small class="danger text-muted">Use<code>.has-danger</code> class for danger state</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title success" for="inputSuccess">
                                <strong>Success State</strong>
                            </label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group has-success">
                                    <input type="text" class="form-control form-control-success" id="inputSuccess">
                                    <p class="text-right">
                                        <small class="success text-muted">Use<code>.has-success</code> class for success state</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title warning" for="inputWarning">
                                <strong>Warning State</strong>
                            </label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group has-warning">
                                    <input type="text" class="form-control form-control-warning" id="inputWarning">
                                    <p class="text-right">
                                        <small class="warning text-muted">Use<code>.has-warning</code> class for warning state</small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- validations end -->
        <!-- Inputs Icons start -->
        <section class="inputs-icons">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Input with Icons</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="iconLeft">Extra Large Input with Left Icon</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Icon Left class <code>.has-icon-left</code>, XLarge Input class
                                    <code>.input-xl</code>&amp; <code>.font-medium-4</code> class
                                    for XLarge Icon </p>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control form-control-xl input-xl" id="iconLeft" placeholder="Icon Left, Extra Large Input">
                                    <div class="form-control-position">
                                        <i class="icon-bulb success font-medium-4"></i>
                                    </div>
                                    <small>Icon Left class <code>.has-icon-left</code>, XLarge Input class
                                        <code>.input-xl</code>&amp; <code>.font-medium-4</code> class
                                        for XLarge Icon </small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="iconLeft1">Extra Large Input with Right Icon</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>XLarge Input class <code>.input-xl</code>&amp; <code>.font-medium-4</code>                      class for XLarge Icon</p>
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control form-control-xl input-xl" id="iconLeft1" placeholder="Icon Right, Extra Large Input">
                                    <div class="form-control-position">
                                        <i class="icon-microphone danger font-medium-4"></i>
                                    </div>
                                    <small>XLarge Input class <code>.input-xl</code>&amp; <code>.font-medium-4</code>                        class for XLarge Icon</small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="iconLeft2">Large Input with Left Icon</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Icon Left class <code>.has-icon-left</code>, Large Input class
                                    <code>.input-lg</code>&amp; <code>.font-medium-4</code> class
                                    for Large Icon </p>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control form-control-lg input-lg" id="iconLeft2" placeholder="Icon Left, Large Input">
                                    <div class="form-control-position">
                                        <i class="icon-lock-open warning font-medium-4"></i>
                                    </div>
                                    <small>Icon Left class <code>.has-icon-left</code>, Large Input class
                                        <code>.input-lg</code>&amp; <code>.font-medium-4</code> class
                                        for Large Icon </small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="iconLeft3">Large Input with Right Icon</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <p>Large Input class <code>.input-lg</code>&amp; <code>.font-medium-4</code>                      class for Large Icon </p>
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control form-control-lg input-lg" id="iconLeft3" placeholder="Icon Right, Large Input">
                                    <div class="form-control-position">
                                        <i class="icon-pencil info font-medium-4"></i>
                                    </div>
                                    <small>Large Input class <code>.input-lg</code>&amp; <code>.font-medium-4</code>                        class for Large Icon </small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="iconLeft4">Default Input with Left Icon</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control" id="iconLeft4" placeholder="Icon Left, Default Input">
                                    <div class="form-control-position">
                                        <i class="icon-screen-smartphone primary"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="iconLeft5">Default Input with Right Icon</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control" id="iconLeft5" placeholder="Icon Right, Default Input">
                                    <div class="form-control-position">
                                        <i class="icon-book-open warning"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Small Input with Left Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control form-control-sm input-sm" id="iconLeft6" placeholder="Icon Left, Small Input">
                                    <div class="form-control-position">
                                        <i class="icon-magnifier danger font-small-3"></i>
                                    </div>
                                    <small>Icon Left class <code>.has-icon-left</code>, Small Input class
                                        <code>.input-sm</code>&amp; <code>.font-small-4</code> class
                                        for Small Icon </small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Small Input with Right Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control form-control-sm input-sm" id="iconLeft7" placeholder="Icon Right, Small Input">
                                    <div class="form-control-position">
                                        <i class="icon-key success font-small-4"></i>
                                    </div>
                                    <small>Small Input class <code>.input-sm</code>&amp; <code>.font-small-4</code>                        class for Small Icon </small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Extra Small Input with Left Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control form-control-xs input-xs" id="iconLeft8" placeholder="Icon Left, Extra Small Input">
                                    <div class="form-control-position">
                                        <i class="icon-pie-chart info font-small-2"></i>
                                    </div>
                                    <small>Icon Left class <code>.has-icon-left</code>, XSmall Input class
                                        <code>.input-xs</code>&amp; <code>.font-small-2</code> class
                                        for XSmall Icon </small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Extra Small Input with Right Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control form-control-xs input-xs" id="iconLeft9" placeholder="Icon Right, Extra Small Input">
                                    <div class="form-control-position">
                                        <i class="icon-cloud-upload warning font-small-2"></i>
                                    </div>
                                    <small>XSmall Input class <code>.input-xs</code>&amp; <code>.font-small-2</code>                        class for XSmall Icon </small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Round Input with Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control round" id="iconLeft10" placeholder="Icon Left, Default Input">
                                    <div class="form-control-position">
                                        <i class="icon-user warning"></i>
                                    </div>
                                    <p>Use class <code>.has-icon-left</code> class for Left Icon.</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Round Input with Right Spin Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control round" id="iconLeft11" placeholder="Icon Right, Default Input">
                                    <div class="form-control-position">
                                        <i class="icon-key primary"></i>
                                    </div>
                                    <p>Default right icon. No classes needed.</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Input with Spin Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control" id="iconLeft12" placeholder="Icon Left, Default Input">
                                    <div class="form-control-position">
                                        <i class="icon-refresh spinner"></i>
                                    </div>
                                    <p>Icon Left class <code>.has-icon-left</code> &amp; <code>.spinner</code>                        class to spin the Icon </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Input with Right Spin Icon</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control" id="iconLeft13" placeholder="Icon Right, Default Input">
                                    <div class="form-control-position">
                                        <i class="spinner icon-disc"></i>
                                    </div>
                                    <p><code>.spinner</code> class to spin the Icon</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inputs Icons end -->
        <!-- Control Color start -->
        <section class="control-color">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Control Color Options</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="textColor">Input Font Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control primary" id="textColor" value="Primary colored Text">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="textColor1">Input Border Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control border-success" id="textColor1" placeholder="Success bordered Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="textColor2">Input Background Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control bg-warning" id="textColor2" value="Background color Input">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="selectColor">Select Font Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <select class="form-control danger" id="selectColor">
                                        <option selected>Select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="selectColor1">Select Border Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <select class="form-control border-warning" id="selectColor1">
                                        <option selected>Select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title" for="selectColor2">Select Background Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <select class="form-control bg-success" id="selectColor2">
                                        <option selected>Select options</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Textarea Font Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <textarea class="form-control info" id="tareaColor1" rows="3">Textarea font Color</textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Textarea Border Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <textarea class="form-control border-primary" id="tareaColor2" rows="3">Textarea with Colored Border</textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Textarea Background Color</label>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group position-relative">
                                    <textarea class="form-control bg-danger" id="tareaColor3" rows="3">Textarea with Colored background</textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Control Color end -->
    </div>

    <div class="content-body">
        <!-- Form actions layout section start -->
        <section id="form-action-layouts">
            <div class="row match-height">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-top-left">Project Info</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Form Actions On Top Left.</strong>
                                    </div>
                                    <p>To add form actions on top of the form add a div with <code>.form-actions</code>                        class to begin the form. Add <code>.top</code> class to add
                                        border below form actions.</p>
                                </div>
                                <form class="form">
                                    <div class="form-actions top">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="projectinput1">First Name</label>
                                                <input type="text" id="projectinput1" class="form-control" placeholder="First Name"
                                                       name="fname">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="projectinput2">Last Name</label>
                                                <input type="text" id="projectinput2" class="form-control" placeholder="Last Name"
                                                       name="lname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="projectinput3">E-mail</label>
                                                <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="projectinput4">Contact Number</label>
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="projectinput5">Company</label>
                                                <input type="text" id="projectinput5" class="form-control" placeholder="Company Name"
                                                       name="company">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="projectinput6">Interested in</label>
                                                <select id="projectinput6" name="interested" class="form-control">
                                                    <option value="none" selected="" disabled="">Interested in</option>
                                                    <option value="design">design</option>
                                                    <option value="development">development</option>
                                                    <option value="illustration">illustration</option>
                                                    <option value="branding">branding</option>
                                                    <option value="video">video</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="projectinput7">Budget</label>
                                                <select id="projectinput7" name="budget" class="form-control">
                                                    <option value="0" selected="" disabled="">Budget</option>
                                                    <option value="less than 5000$">less than 5000$</option>
                                                    <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                    <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                    <option value="more than 20000$">more than 20000$</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label>Select File</label>
                                                <label id="projectinput8" class="file center-block">
                                                    <input type="file" id="file">
                                                    <span class="file-custom"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="projectinput9">About Project</label>
                                                <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-bottom-right">User Profile</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Form Actions On Bottom Right.</strong>
                                    </div>
                                    <p>To add form actions on bottom of the form add a div with <code>.form-actions</code>                        class to end the form. This is the default position for form
                                        actions. We have added <code>.right</code> class to move
                                        buttons on the right side.</p>
                                </div>
                                <form class="form">
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="la la-eye"></i> About User</h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="userinput1">Fist Name</label>
                                                <input type="text" id="userinput1" class="form-control border-primary" placeholder="Name"
                                                       name="name">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="userinput2">Last Name</label>
                                                <input type="text" id="userinput2" class="form-control border-primary" placeholder="Company"
                                                       name="company">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="userinput3">Username</label>
                                                <input type="text" id="userinput3" class="form-control border-primary" placeholder="Username"
                                                       name="username">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="userinput4">Nick Name</label>
                                                <input type="text" id="userinput4" class="form-control border-primary" placeholder="Nick Name"
                                                       name="nickname">
                                            </div>
                                        </div>
                                        <h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="userinput5">Email</label>
                                                <input class="form-control border-primary" type="email" placeholder="email" id="userinput5">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="userinput6">Website</label>
                                                <input class="form-control border-primary" type="url" placeholder="http://" id="userinput6">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label>Contact Number</label>
                                                <input class="form-control border-primary" type="tel" placeholder="Contact Number"
                                                       id="userinput7">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="userinput8">Bio</label>
                                                <textarea id="userinput8" rows="5" class="form-control border-primary" name="bio"
                                                          placeholder="Bio"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-top-bottom-left">Issue Tracking</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Form Actions On Top And Bottom Left.</strong>
                                    </div>
                                    <p>To add form actions on top and bottom of the form add a div
                                        with <code>.form-actions</code> class to start and end the
                                        form.
                                    </p>
                                </div>
                                <form class="form">
                                    <div class="form-body">
                                        <div class="form-actions top">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="issueinput1">Issue Title</label>
                                                <input type="text" id="issueinput1" class="form-control" placeholder="issue title"
                                                       name="issuetitle" data-toggle="tooltip" data-trigger="hover"
                                                       data-placement="top" data-title="Issue Title">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="issueinput2">Opened By</label>
                                                <input type="text" id="issueinput2" class="form-control" placeholder="opened by"
                                                       name="openedby" data-toggle="tooltip" data-trigger="hover"
                                                       data-placement="top" data-title="Opened By">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="issueinput3">Date Opened</label>
                                                <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip"
                                                       data-trigger="hover" data-placement="top" data-title="Date Opened">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="issueinput4">Date Fixed</label>
                                                <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip"
                                                       data-trigger="hover" data-placement="top" data-title="Date Fixed">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="issueinput5">Priority</label>
                                                <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip"
                                                        data-trigger="hover" data-placement="top" data-title="Priority">
                                                    <option value="low">Low</option>
                                                    <option value="medium">Medium</option>
                                                    <option value="high">High</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="issueinput6">Status</label>
                                                <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip"
                                                        data-trigger="hover" data-placement="top" data-title="Status">
                                                    <option value="not started">Not Started</option>
                                                    <option value="started">Started</option>
                                                    <option value="fixed">Fixed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="issueinput8">Comments</label>
                                                <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="comments"
                                                          data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                          data-title="Comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-top-bottom-right">Timesheet</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Form Actions On Top And Bottom Right.</strong>
                                    </div>
                                    <p>To add form actions on top and bottom of the form add a div
                                        with <code>.form-actions</code> class to start and end the
                                        form. Add <code>.right</code> class to align the form action
                                        buttons to right.</p>
                                </div>
                                <form class="form">
                                    <div class="form-body">
                                        <div class="form-actions top right">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="timesheetinput1">Employee Name</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name"
                                                           name="employeename">
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="timesheetinput2">Project Name</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="timesheetinput2" class="form-control" placeholder="project name"
                                                           name="projectname">
                                                    <div class="form-control-position">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="timesheetinput3">Date</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                    <div class="form-control-position">
                                                        <i class="ft-message-square"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label>Rate Per Hour</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)"
                                                           name="rateperhour">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="timesheetinput5">Start Time</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="timesheetinput6">End Time</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="timesheetinput7">Notes</label>
                                                <div class="position-relative has-icon-left">
                                                    <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                                    <div class="form-control-position">
                                                        <i class="ft-file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-center-dropdown">Complaint Form</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger">Default</button>
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Form Actions On Center With Dropdown Form Action.</strong>
                                    </div>
                                    <p>To add form actions on bottom of the form add a div with <code>.form-actions</code>                        class to end the form. Add <code>.center</code> class to
                                        align the form action buttons to center. We can also add
                                        more form action using dropdown button to the top right corner
                                        of the form.</p>
                                </div>
                                <form class="form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="complaintinput1">Company Name</label>
                                                <input type="text" id="complaintinput1" class="form-control round" placeholder="company name"
                                                       name="companyname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="complaintinput2">Employee Name</label>
                                                <input type="text" id="complaintinput2" class="form-control round" placeholder="employee name"
                                                       name="employeename">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="complaintinput3">Date of Complaint</label>
                                                <input type="date" id="complaintinput3" class="form-control round" name="complaintdate">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="complaintinput4">Supervisor's Name</label>
                                                <input type="text" id="complaintinput4" class="form-control round" placeholder="supervisor name"
                                                       name="supervisorname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="complaintinput5">Complaint Details</label>
                                                <textarea id="complaintinput5" rows="5" class="form-control round" name="complaintdetails"
                                                          placeholder="details"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="complaintinput6">Signature</label>
                                                <input type="text" id="complaintinput6" class="form-control round" placeholder="signature"
                                                       name="signature">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions center">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-center-search">Donation</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <input type="text" class="form-control round" placeholder="search" name="form-search">
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Form Actions On Center With Search Form Action.</strong>
                                    </div>
                                    <p>To add form actions on bottom of the form add a div with <code>.form-actions</code>                        class to end the form. Add <code>.center</code> class to
                                        align the form action buttons to center. We can also search
                                        bar action of the form.</p>
                                </div>
                                <form class="form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput1">Full Name</label>
                                                <input type="text" id="donationinput1" class="form-control square" placeholder="name"
                                                       name="fullname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput2">Email</label>
                                                <input type="email" id="donationinput2" class="form-control square" placeholder="email"
                                                       name="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput3">Contact Number</label>
                                                <input type="tel" id="donationinput3" class="form-control square" name="contact">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Dontaion Type</label>
                                                <input type="text" id="donationinput4" class="form-control square" placeholder="type of donation"
                                                       name="donationtype">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label>Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control square" placeholder="amount" aria-label="Amount (to the nearest dollar)"
                                                           name="amount">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput7">Comments</label>
                                                <textarea id="donationinput7" rows="5" class="form-control square" name="comments"
                                                          placeholder="comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions center">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-multiple">Event Registration</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Multiple Form Actions On Top And Bottom.</strong>
                                    </div>
                                    <p>To add form actions on top and bottom of the form add a div
                                        with <code>.form-actions</code> class to start and end the
                                        form. Add <code>.buttons-group</code> class along with <code>.float-*</code>                        class to pull the buttons group to either left or right.</p>
                                </div>
                                <form class="form">
                                    <div class="form-actions top clearfix">
                                        <div class="buttons-group float-left">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary mr-1">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                        <div class="buttons-group float-right">
                                            <button type="button" class="btn btn-info mr-1">Action 1</button>
                                            <button type="submit" class="btn btn-danger mr-1">Action 2</button>
                                            <button type="submit" class="btn btn-success">Action 3</button>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput1">Full Name</label>
                                                        <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput2">Title</label>
                                                        <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput3">Company</label>
                                                        <input type="text" id="eventRegInput3" class="form-control" placeholder="company"
                                                               name="company">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput4">Email</label>
                                                        <input type="email" id="eventRegInput4" class="form-control" placeholder="email"
                                                               name="email">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput5">Contact Number</label>
                                                        <input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Existing Customer</label>
                                                        <div class="input-group">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="yes">
                                                                <label class="custom-control-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="no">
                                                                <label class="custom-control-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions clearfix">
                                        <div class="buttons-group float-left">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary mr-1">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                        <div class="buttons-group float-right">
                                            <button type="button" class="btn btn-info mr-1">Action 1</button>
                                            <button type="submit" class="btn btn-danger mr-1">Action 2</button>
                                            <button type="submit" class="btn btn-success">Action 3</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-top-bottom-center">Event Registration</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                        <span class="alert-icon"><i class="la la-info"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Form Actions On Top And Bottom Center.</strong>
                                    </div>
                                    <p>To add form actions on top and bottom of the form add a div
                                        with <code>.form-actions</code> class to start and end the
                                        form. Add <code>.center</code> class to align the form action
                                        buttons to center.</p>
                                </div>
                                <form class="form">
                                    <div class="form-actions top center">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="eventInput1">Full Name</label>
                                                <input type="text" id="eventInput1" class="form-control" placeholder="name" name="fullname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="eventInput2">Title</label>
                                                <input type="text" id="eventInput2" class="form-control" placeholder="title" name="title">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="eventInput3">Company</label>
                                                <input type="text" id="eventInput3" class="form-control" placeholder="company" name="company">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="eventInput4">Email</label>
                                                <input type="email" id="eventInput4" class="form-control" placeholder="email" name="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="eventInput5">Contact Number</label>
                                                <input type="tel" id="eventInput5" class="form-control" name="contact" placeholder="contact number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label>Existing Customer</label>
                                                <div class="input-group">
                                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                                        <input type="radio" name="customer2" class="custom-control-input" id="yes1">
                                                        <label class="custom-control-label" for="yes1">Yes</label>
                                                    </div>
                                                    <div class="d-inline-block custom-control custom-radio">
                                                        <input type="radio" name="customer2" class="custom-control-input" id="no1">
                                                        <label class="custom-control-label" for="no1">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions center">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Form actions layout section end -->
    </div>

    <div class="content-body">
        <!-- Selectize selects start -->
        <section class="basic-selectize">
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Basic Selectize input</h5>
                                    <p>Add <code>.input-selectize</code> class to input field and
                                        add value comma saperated. </p>
                                    <input type="text" class="input-selectize" value="pretty,awesome">
                                </div>
                                <div class="form-group">
                                    <h5>Basic Selectize select with Placeholder</h5>
                                    <p>Add <code>.selectize-select</code> class to select for basic
                                        Selectize select field</p>
                                    <select class="selectize-select">
                                        <option value="" selected>No city selected</option>
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12">Cologne</option>
                                        <option value="13">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                        <option value="21">Glasgow</option>
                                        <option value="22">Gothenburg</option>
                                        <option value="23">Hamburg</option>
                                        <option value="24">Hannover</option>
                                        <option value="25">Helsinki</option>
                                        <option value="26">Leeds</option>
                                        <option value="27">Leipzig</option>
                                        <option value="28">Lisbon</option>
                                        <option value="29">Łódź</option>
                                        <option value="30">London</option>
                                        <option value="31">Kraków</option>
                                        <option value="32">Madrid</option>
                                        <option value="33">Málaga</option>
                                        <option value="34">Manchester</option>
                                        <option value="35">Marseille</option>
                                        <option value="36">Milan</option>
                                        <option value="37">Munich</option>
                                        <option value="38">Naples</option>
                                        <option value="39">Palermo</option>
                                        <option value="40">Paris</option>
                                        <option value="41">Poznań</option>
                                        <option value="42">Prague</option>
                                        <option value="43">Riga</option>
                                        <option value="44">Rome</option>
                                        <option value="45">Rotterdam</option>
                                        <option value="46">Seville</option>
                                        <option value="47">Sheffield</option>
                                        <option value="48">Sofia</option>
                                        <option value="49">Stockholm</option>
                                        <option value="50">Stuttgart</option>
                                        <option value="51">The Hague</option>
                                        <option value="52">Turin</option>
                                        <option value="53">Valencia</option>
                                        <option value="54">Vienna</option>
                                        <option value="55">Vilnius</option>
                                        <option value="56">Warsaw</option>
                                        <option value="57">Wrocław</option>
                                        <option value="58">Zagreb</option>
                                        <option value="59">Zaragoza</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Basic Selectize select without placeholder</h5>
                                    <select class="selectize-select">
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12">Cologne</option>
                                        <option value="13">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                        <option value="21">Glasgow</option>
                                        <option value="22">Gothenburg</option>
                                        <option value="23">Hamburg</option>
                                        <option value="24">Hannover</option>
                                        <option value="25">Helsinki</option>
                                        <option value="26">Leeds</option>
                                        <option value="27">Leipzig</option>
                                        <option value="28">Lisbon</option>
                                        <option value="29">Łódź</option>
                                        <option value="30">London</option>
                                        <option value="31">Kraków</option>
                                        <option value="32">Madrid</option>
                                        <option value="33">Málaga</option>
                                        <option value="34">Manchester</option>
                                        <option value="35">Marseille</option>
                                        <option value="36">Milan</option>
                                        <option value="37">Munich</option>
                                        <option value="38">Naples</option>
                                        <option value="39">Palermo</option>
                                        <option value="40">Paris</option>
                                        <option value="41">Poznań</option>
                                        <option value="42">Prague</option>
                                        <option value="43">Riga</option>
                                        <option value="44">Rome</option>
                                        <option value="45">Rotterdam</option>
                                        <option value="46">Seville</option>
                                        <option value="47">Sheffield</option>
                                        <option value="48">Sofia</option>
                                        <option value="49">Stockholm</option>
                                        <option value="50">Stuttgart</option>
                                        <option value="51">The Hague</option>
                                        <option value="52">Turin</option>
                                        <option value="53">Valencia</option>
                                        <option value="54">Vienna</option>
                                        <option value="55">Vilnius</option>
                                        <option value="56">Warsaw</option>
                                        <option value="57">Wrocław</option>
                                        <option value="58">Zagreb</option>
                                        <option value="59">Zaragoza</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Disabled Selectize select</h5>
                                    <select class="selectize-select" disabled>
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12">Cologne</option>
                                        <option value="13">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                        <option value="21">Glasgow</option>
                                        <option value="22">Gothenburg</option>
                                        <option value="23" selected>Hamburg</option>
                                        <option value="24">Hannover</option>
                                        <option value="25">Helsinki</option>
                                        <option value="26">Leeds</option>
                                        <option value="27">Leipzig</option>
                                        <option value="28">Lisbon</option>
                                        <option value="29">Łódź</option>
                                        <option value="30">London</option>
                                        <option value="31">Kraków</option>
                                        <option value="32">Madrid</option>
                                        <option value="33">Málaga</option>
                                        <option value="34">Manchester</option>
                                        <option value="35">Marseille</option>
                                        <option value="36">Milan</option>
                                        <option value="37">Munich</option>
                                        <option value="38">Naples</option>
                                        <option value="39">Palermo</option>
                                        <option value="40">Paris</option>
                                        <option value="41">Poznań</option>
                                        <option value="42">Prague</option>
                                        <option value="43">Riga</option>
                                        <option value="44">Rome</option>
                                        <option value="45">Rotterdam</option>
                                        <option value="46">Seville</option>
                                        <option value="47">Sheffield</option>
                                        <option value="48">Sofia</option>
                                        <option value="49">Stockholm</option>
                                        <option value="50">Stuttgart</option>
                                        <option value="51">The Hague</option>
                                        <option value="52">Turin</option>
                                        <option value="53">Valencia</option>
                                        <option value="54">Vienna</option>
                                        <option value="55">Vilnius</option>
                                        <option value="56">Warsaw</option>
                                        <option value="57">Wrocław</option>
                                        <option value="58">Zagreb</option>
                                        <option value="59">Zaragoza</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Selectize multiple select</h5>
                                    <p>Add <code>.selectize-multiple</code> class multiple selectize
                                        field
                                    </p>
                                    <select class="selectize-multiple" multiple>
                                        <option value="">No city selected</option>
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10">Bucharest</option>
                                        <option value="11" selected>Budapest</option>
                                        <option value="12">Cologne</option>
                                        <option value="13">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                        <option value="21">Glasgow</option>
                                        <option value="22">Gothenburg</option>
                                        <option value="23">Hamburg</option>
                                        <option value="24">Hannover</option>
                                        <option value="25">Helsinki</option>
                                        <option value="26" selected>Leeds</option>
                                        <option value="27">Leipzig</option>
                                        <option value="28">Lisbon</option>
                                        <option value="29">Łódź</option>
                                        <option value="30">London</option>
                                        <option value="31">Kraków</option>
                                        <option value="32">Madrid</option>
                                        <option value="33">Málaga</option>
                                        <option value="34">Manchester</option>
                                        <option value="35">Marseille</option>
                                        <option value="36">Milan</option>
                                        <option value="37">Munich</option>
                                        <option value="38">Naples</option>
                                        <option value="39">Palermo</option>
                                        <option value="40">Paris</option>
                                        <option value="41">Poznań</option>
                                        <option value="42">Prague</option>
                                        <option value="43">Riga</option>
                                        <option value="44">Rome</option>
                                        <option value="45">Rotterdam</option>
                                        <option value="46">Seville</option>
                                        <option value="47">Sheffield</option>
                                        <option value="48">Sofia</option>
                                        <option value="49" selected>Stockholm</option>
                                        <option value="50">Stuttgart</option>
                                        <option value="51">The Hague</option>
                                        <option value="52">Turin</option>
                                        <option value="53">Valencia</option>
                                        <option value="54">Vienna</option>
                                        <option value="55">Vilnius</option>
                                        <option value="56">Warsaw</option>
                                        <option value="57">Wrocław</option>
                                        <option value="58">Zagreb</option>
                                        <option value="59">Zaragoza</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Selectize multiple select with placeholder</h5>
                                    <select class="selectize-multiple" multiple>
                                        <option value="" selected>No city selected</option>
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12">Cologne</option>
                                        <option value="13">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18">Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                        <option value="21">Glasgow</option>
                                        <option value="22">Gothenburg</option>
                                        <option value="23">Hamburg</option>
                                        <option value="24">Hannover</option>
                                        <option value="25">Helsinki</option>
                                        <option value="26">Leeds</option>
                                        <option value="27">Leipzig</option>
                                        <option value="28">Lisbon</option>
                                        <option value="29">Łódź</option>
                                        <option value="30">London</option>
                                        <option value="31">Kraków</option>
                                        <option value="32">Madrid</option>
                                        <option value="33">Málaga</option>
                                        <option value="34">Manchester</option>
                                        <option value="35">Marseille</option>
                                        <option value="36">Milan</option>
                                        <option value="37">Munich</option>
                                        <option value="38">Naples</option>
                                        <option value="39">Palermo</option>
                                        <option value="40">Paris</option>
                                        <option value="41">Poznań</option>
                                        <option value="42">Prague</option>
                                        <option value="43">Riga</option>
                                        <option value="44">Rome</option>
                                        <option value="45">Rotterdam</option>
                                        <option value="46">Seville</option>
                                        <option value="47">Sheffield</option>
                                        <option value="48">Sofia</option>
                                        <option value="49">Stockholm</option>
                                        <option value="50">Stuttgart</option>
                                        <option value="51">The Hague</option>
                                        <option value="52">Turin</option>
                                        <option value="53">Valencia</option>
                                        <option value="54">Vienna</option>
                                        <option value="55">Vilnius</option>
                                        <option value="56">Warsaw</option>
                                        <option value="57">Wrocław</option>
                                        <option value="58">Zagreb</option>
                                        <option value="59">Zaragoza</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Selectize multiple select with label</h5>
                                    <select class="selectize-multiple" multiple>
                                        <option value="" selected>No city selected</option>
                                        <optgroup label="Austria">
                                            <option value="54" data-timezone="+01:00">Vienna</option>
                                        </optgroup>
                                        <optgroup label="Belgium">
                                            <option value="2" data-timezone="+01:00">Antwerp</option>
                                            <option value="9" data-timezone="+01:00">Brussels</option>
                                        </optgroup>
                                        <optgroup label="Bulgaria">
                                            <option value="48" data-timezone="+02:00">Sofia</option>
                                        </optgroup>
                                        <optgroup label="Croatia">
                                            <option value="58" data-timezone="+01:00">Zagreb</option>
                                        </optgroup>
                                        <optgroup label="Czech Republic">
                                            <option value="42" data-timezone="+01:00">Prague</option>
                                        </optgroup>
                                        <optgroup label="Denmark">
                                            <option value="13" data-timezone="+01:00">Copenhagen</option>
                                        </optgroup>
                                        <optgroup label="England">
                                            <option value="6" data-timezone="+00:00">Birmingham</option>
                                            <option value="7" data-timezone="+00:00">Bradford</option>
                                            <option value="26" data-timezone="+00:00">Leeds</option>
                                            <option value="30" data-timezone="+00:00">London</option>
                                            <option value="34" data-timezone="+00:00">Manchester</option>
                                            <option value="47" data-timezone="+00:00">Sheffield</option>
                                        </optgroup>
                                        <optgroup label="Finland">
                                            <option value="25" data-timezone="+02:00">Helsinki</option>
                                        </optgroup>
                                        <optgroup label="France">
                                            <option value="35" data-timezone="+01:00">Marseille</option>
                                            <option value="40" data-timezone="+01:00">Paris</option>
                                        </optgroup>
                                        <optgroup label="Germany">
                                            <option value="5" data-timezone="+01:00">Berlin</option>
                                            <option value="8" data-timezone="+01:00">Bremen</option>
                                            <option value="12" data-timezone="+01:00">Cologne</option>
                                            <option value="14" data-timezone="+01:00">Dortmund</option>
                                            <option value="15" data-timezone="+01:00">Dresden</option>
                                            <option value="17" data-timezone="+01:00">Düsseldorf</option>
                                            <option value="18" data-timezone="+01:00">Essen</option>
                                            <option value="19" data-timezone="+01:00">Frankfurt</option>
                                            <option value="23" data-timezone="+01:00">Hamburg</option>
                                            <option value="24" data-timezone="+01:00">Hannover</option>
                                            <option value="27" data-timezone="+01:00">Leipzig</option>
                                            <option value="37" data-timezone="+01:00">Munich</option>
                                            <option value="50" data-timezone="+01:00">Stuttgart</option>
                                        </optgroup>
                                        <optgroup label="Greece">
                                            <option value="3" data-timezone="+02:00">Athens</option>
                                        </optgroup>
                                        <optgroup label="Hungary">
                                            <option value="11" data-timezone="+01:00">Budapest</option>
                                        </optgroup>
                                        <optgroup label="Ireland">
                                            <option value="16" data-timezone="+00:00">Dublin</option>
                                        </optgroup>
                                        <optgroup label="Italy">
                                            <option value="20" data-timezone="+01:00">Genoa</option>
                                            <option value="36" data-timezone="+01:00">Milan</option>
                                            <option value="38" data-timezone="+01:00">Naples</option>
                                            <option value="39" data-timezone="+01:00">Palermo</option>
                                            <option value="44" data-timezone="+01:00">Rome</option>
                                            <option value="52" data-timezone="+01:00">Turin</option>
                                        </optgroup>
                                        <optgroup label="Latvia">
                                            <option value="43" data-timezone="+02:00">Riga</option>
                                        </optgroup>
                                        <optgroup label="Lithuania">
                                            <option value="55" data-timezone="+02:00">Vilnius</option>
                                        </optgroup>
                                        <optgroup label="Netherlands">
                                            <option value="1" data-timezone="+01:00">Amsterdam</option>
                                            <option value="45" data-timezone="+01:00">Rotterdam</option>
                                            <option value="51" data-timezone="+01:00">The Hague</option>
                                        </optgroup>
                                        <optgroup label="Poland">
                                            <option value="29" data-timezone="+01:00">Łódź</option>
                                            <option value="31" data-timezone="+01:00">Kraków</option>
                                            <option value="41" data-timezone="+01:00">Poznań</option>
                                            <option value="56" data-timezone="+01:00">Warsaw</option>
                                            <option value="57" data-timezone="+01:00">Wrocław</option>
                                        </optgroup>
                                        <optgroup label="Portugal">
                                            <option value="28" data-timezone="+00:00">Lisbon</option>
                                        </optgroup>
                                        <optgroup label="Romania">
                                            <option value="10" data-timezone="+02:00">Bucharest</option>
                                        </optgroup>
                                        <optgroup label="Scotland">
                                            <option value="21" data-timezone="+00:00">Glasgow</option>
                                        </optgroup>
                                        <optgroup label="Spain">
                                            <option value="4" data-timezone="+00:00">Barcelona</option>
                                            <option value="32" data-timezone="+00:00">Madrid</option>
                                            <option value="33" data-timezone="+00:00">Málaga</option>
                                            <option value="46" data-timezone="+00:00">Seville</option>
                                            <option value="53" data-timezone="+00:00">Valencia</option>
                                            <option value="59" data-timezone="+00:00">Zaragoza</option>
                                        </optgroup>
                                        <optgroup label="Sweden">
                                            <option value="22" data-timezone="+01:00">Gothenburg</option>
                                            <option value="49" data-timezone="+01:00">Stockholm</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Disabled Selectize multiple select</h5>
                                    <select class="selectize-multiple" disabled multiple>
                                        <option value="">No city selected</option>
                                        <option value="1">Amsterdam</option>
                                        <option value="2">Antwerp</option>
                                        <option value="3">Athens</option>
                                        <option value="4">Barcelona</option>
                                        <option value="5">Berlin</option>
                                        <option value="6">Birmingham</option>
                                        <option value="7">Bradford</option>
                                        <option value="8">Bremen</option>
                                        <option value="9">Brussels</option>
                                        <option value="10">Bucharest</option>
                                        <option value="11">Budapest</option>
                                        <option value="12" selected>Cologne</option>
                                        <option value="13">Copenhagen</option>
                                        <option value="14">Dortmund</option>
                                        <option value="15">Dresden</option>
                                        <option value="16">Dublin</option>
                                        <option value="17">Düsseldorf</option>
                                        <option value="18" selected>Essen</option>
                                        <option value="19">Frankfurt</option>
                                        <option value="20">Genoa</option>
                                        <option value="21">Glasgow</option>
                                        <option value="22">Gothenburg</option>
                                        <option value="23">Hamburg</option>
                                        <option value="24">Hannover</option>
                                        <option value="25">Helsinki</option>
                                        <option value="26">Leeds</option>
                                        <option value="27">Leipzig</option>
                                        <option value="28">Lisbon</option>
                                        <option value="29">Łódź</option>
                                        <option value="30">London</option>
                                        <option value="31">Kraków</option>
                                        <option value="32">Madrid</option>
                                        <option value="33">Málaga</option>
                                        <option value="34">Manchester</option>
                                        <option value="35">Marseille</option>
                                        <option value="36">Milan</option>
                                        <option value="37">Munich</option>
                                        <option value="38">Naples</option>
                                        <option value="39">Palermo</option>
                                        <option value="40">Paris</option>
                                        <option value="41">Poznań</option>
                                        <option value="42">Prague</option>
                                        <option value="43">Riga</option>
                                        <option value="44">Rome</option>
                                        <option value="45">Rotterdam</option>
                                        <option value="46">Seville</option>
                                        <option value="47">Sheffield</option>
                                        <option value="48">Sofia</option>
                                        <option value="49">Stockholm</option>
                                        <option value="50" selected>Stuttgart</option>
                                        <option value="51">The Hague</option>
                                        <option value="52">Turin</option>
                                        <option value="53">Valencia</option>
                                        <option value="54">Vienna</option>
                                        <option value="55">Vilnius</option>
                                        <option value="56">Warsaw</option>
                                        <option value="57">Wrocław</option>
                                        <option value="58">Zagreb</option>
                                        <option value="59">Zaragoza</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Selectize selects end -->
        <!-- Advance Selectize Options start -->
        <section class="advance-options">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Advance Selectize Options</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Confirm On Remove</h5>
                                    <p>Add <code>.confirm-selectize</code> class to confirm on remove
                                        a value. </p>
                                    <input type="text" class="confirm-selectize" value="you,are,pretty,awesome">
                                </div>
                                <div class="form-group">
                                    <h5>Contact selector like Email apps</h5>
                                    <p>Add <code>.select-contact</code> class to create contact selector
                                        like Email apps. </p>
                                    <select class="select-contact contacts">
                                        <option value="" selected>Pick some people...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Integrate third-party repository</h5>
                                    <p>Add <code>.repositories</code> class to Integrate github repository
                                    </p>
                                    <select id="selectize-repo" class="repositories">
                                        <option value="" selected>Pick some repository...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Lock Single select</h5>
                                    <p>Add <code>.selectize-locked</code> class to lock single select
                                    </p>
                                    <select class="selectize-locked">
                                        <option value="">No input allowed...</option>
                                        <option value="A">Option A</option>
                                        <option value="B" selected>Option B</option>
                                        <option value="C">Option C</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Selectize with 25,000 random items</h5>
                                    <p>Add <code>.selectize-junk</code> class to lock single select
                                    </p>
                                    <select class="selectize-junk">
                                        <option value="" selected>Start Typing...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Selectize with Remove Button tags</h5>
                                    <p>Add <code>.remove-tags</code> class to get select with remove
                                        button
                                    </p>
                                    <input type="text" class="remove-tags" value="awesome,neat">
                                </div>
                                <div class="form-group">
                                    <h5>Selectize with Remove Button tags Disabled</h5>
                                    <p>Add <code>.remove-tags</code> class to get select with remove
                                        button &amp; disabled field</p>
                                    <input type="text" disabled class="remove-tags" value="you,are,awesome">
                                </div>
                                <div class="form-group">
                                    <h5>Selectize with restore on backspace</h5>
                                    <p>Add <code>.backup-restore</code> class to restore on backspace</p>
                                    <input type="text" class="backup-restore" value="you,are,awesome">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <h5>Sort options of group</h5>
                                    <p>Add <code>.selectize-sort</code> class to sort select options
                                    </p>
                                    <select class="selectize-sort" multiple>
                                        <option value="" selected>Select gear...</option>
                                        <optgroup label="Climbing">
                                            <option value="pitons">Pitons</option>
                                            <option value="cams">Cams</option>
                                            <option value="nuts">Nuts</option>
                                            <option value="bolts">Bolts</option>
                                            <option value="stoppers">Stoppers</option>
                                            <option value="sling">Sling</option>
                                        </optgroup>
                                        <optgroup label="Skiing">
                                            <option value="skis">Skis</option>
                                            <option value="skins">Skins</option>
                                            <option value="poles">Poles</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div id="wrapper">
                                        <h5>Details about each event</h5>
                                        <p>Add <code>.selectize-event</code> class to find which event
                                            fire. </p>
                                        <div id="log"></div>
                                        <select id="selectize-state" multiple name="state[]" class="selectize-event">
                                            <option value="">Select a state...</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY" selected>Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Get Movies List by API</h5>
                                    <p>Add <code>.selectize-movie</code> class to get movies API.
                                    </p>
                                    <select class="selectize-movie movies">
                                        <option value="" selected>Find a movie...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Options with Links</h5>
                                    <p>Add <code>.selectize-movie</code> class to get movies API.
                                    </p>
                                    <select class="selectize-links">
                                        <option value="" selected>Find Here..</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5>Drag &amp; Drop options</h5>
                                    <p>Add <code>.selectise-drap-drop</code> class to sort options
                                        by drag and drop. </p>
                                    <input type="text" class="selectise-drap-drop" value="drag,these,items,around">
                                </div>
                                <div class="form-group" dir="rtl">
                                    <h5>RTL Input Selectize</h5>
                                    <p>Add <code>.selectize-rtl-input</code> class supports RTL to
                                        input. </p>
                                    <input type="text" class="selectize-rtl-input" value="drag,these,items,around">
                                </div>
                                <div class="form-group" dir="rtl">
                                    <h5>RTL Select field Selectize</h5>
                                    <p>Add <code>.selectize-rtl-select</code> class supports RTL to
                                        select </p>
                                    <select class="selectize-rtl-select">
                                        <option value="" selected>Select a person...</option>
                                        <option value="4">Thomas Edison</option>
                                        <option value="1">Nikola</option>
                                        <option value="3">Nikola Tesla</option>
                                        <option value="5">Arnold Schwarzenegger</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Advance Selectize Options end -->
    </div>

    <div class="content-body">
        <!-- Checkbox Toggle start -->
        <section class="bootstrap-checkbox" id="bootstrap-checkbox">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Bootstrap Checkbox Toggle</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Simple Switch</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>.switch</code>class to checkbox to set as switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch1" checked="checked" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Reverse Switch</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Add <code>checked</code> to set checked bootstrap switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch2" data-reverse/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Always toggle Switch</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>data-switch-always</code> to switch on every click</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch3" data-switch-always checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Disabled Switch</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Checked &amp; Disabled toggle</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch4" disabled checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Small Switch</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>data-group-cls="btn-group-sm"</code> attribute for
                                    small switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch5" data-group-cls="btn-group-sm"
                                        />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Large Switch</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>data-group-cls="btn-group-lg"</code> attribute for
                                    large switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch6" data-group-cls="btn-group-lg"
                                        />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Vertical Switch</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>data-group-cls="btn-group-vertical"</code> attribute
                                    for vertical switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch7" data-group-cls="btn-group-vertical"
                                               data-switch-always/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Change Switch Title</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>data-off-title="VALUE"</code> attribute for OFF hover
                                    title and <code>data-on-title="VALUE"</code> attribute for
                                    ON hover title</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch8" data-off-title="Don't Say NO!!"
                                               data-on-title="Say,Yes please!!" data-switch-always checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Switch with Icons</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>data-icon-cls="fa"</code> to set font family you are
                                    using <code>data-off-icon-cls="fa FONT_AWESOME_ICON"</code>                      attribute for off switch icon &amp; <code>data-on-icon-cls="fa FONT_AWESOME_ICON"</code>                      attribute for on switch icon</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch9" data-icon-cls="fa" data-off-icon-cls="ft-thumbs-down"
                                               data-on-icon-cls="ft-thumbs-up" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Only Switch Icons</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>To set only icon switch set <code>data-off-label="false"</code>                      &amp; <code>data-off-label="false"</code>.</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch10" data-off-label="false" data-on-label="false"
                                               data-icon-cls="fa" data-off-icon-cls="icon-user" data-on-icon-cls="icon-user-female"
                                               checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">OnLabel Click change</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" id="switch11" data-col-sm-3/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Change Switch Labels</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Add <code>data-off-label="OffValue"</code> attribute for off
                                    switch label &amp; <code>data-on-label="OnValue"</code> attribute
                                    for on switch label</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switch" data-on-label="Male" data-off-label="Female"
                                               id="switch12" checked />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkbox Toggle end -->
        <!-- Bootstrap Switch start -->
        <section class="bootstrap-switch-toggle" id="bootstrap-switch-toggle">
            <div class="row">
                <div class="col-12">
                    <h4>Bootstrap Switch Toggle</h4>
                    <hr>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch default</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Add <code>.switchBootstrap</code> class to set bootstrap switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="make-switch switchBootstrap" id="switchBootstrap1"
                                        />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch checked</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Add <code>checked</code> to set checked bootstrap switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch checked &amp; Disabled</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Add <code>checked disabled</code> to set checked &amp; disabled
                                    bootstrap switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" checked disabled/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Checked &amp; readonly</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Add <code>checked readonly</code> for checked &amp; readonly
                                    switch direction.</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" checked readonly/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch with On Text</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Add <code>data-on-text="TEXT"</code> to change text of the left
                                    side of the switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap5" data-on-text="Left"
                                               checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch with Off Text</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> Add <code>data-off-text="TEXT"</code> to change text of the right
                                    side of the switch</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap6" data-off-text="Right"
                                        />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch with custom Label</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>use <code>data-label-text="TEXT"</code> for text of the center
                                    handle of the switch and that will work with <code>data-indeterminate="true"</code>                      attribute only.</p>
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap7" data-on-text="Female"
                                               data-off-text="Male" data-label-text="Gender" data-indeterminate="true"
                                               checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Label Options</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap8" data-on-text="Yes"
                                               data-off-text="No" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Label Options</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap9" data-on-text="Online"
                                               data-off-text="Offline" checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Label Options</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap10" data-on-text="Enable"
                                               data-off-text="Disable" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch with Icon</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap11" data-on-text="<i class='la la-thumbs-up'></i>"
                                               data-off-text="<i class='la la-thumbs-down'></i>" checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch with Icon &amp; Text</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap12" data-on-text="<i class='la la-thumbs-up'></i> <br>Yes"
                                               data-off-text="<i class='la la-thumbs-down'></i> <br> No"
                                        />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Label with Icon</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap13" data-on-text="Male <i class='la la-mars'></i>"
                                               data-off-text="Female <i class='la la-venus'></i>" data-label-text="Gender"
                                               data-indeterminate="true" checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Label with Icon on top</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap14" data-on-text="<i class='la la-mars'></i> <br> Male "
                                               data-off-text="<i class='la la-venus'></i> <br> Female "
                                               data-label-text="Gender" data-indeterminate="true" checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Default Color</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap15" data-on-color="default"
                                               checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Primary Color</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap16" data-on-color="primary"
                                               checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Warning Color</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap17" data-on-color="warning"
                                               checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Success Color</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap18" data-on-color="success"
                                               data-off-color="danger" checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Danger Color</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap19" data-off-color="danger"
                                        />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Info Color</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="checkbox" class="switchBootstrap" id="switchBootstrap20" data-on-color="info"
                                               checked/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Radio</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="radio" name="radio1" checked class="switchBootstrap">
                                        <input type="radio" name="radio1" class="switchBootstrap">
                                        <input type="radio" name="radio1" class="switchBootstrap">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <label class="card-title">Bootstrap Switch Radio Icons</label>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset>
                                    <div class="float-left">
                                        <input type="radio" name="radio2" checked data-radio-all-off="true" class="switchBootstrap">
                                        <input type="radio" name="radio2" data-radio-all-off="true" class="switchBootstrap">
                                        <input type="radio" name="radio2" data-radio-all-off="true" class="switchBootstrap">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap Switch end -->
        <!-- Switchery Switch start -->
        <section class="switchery-toggle" id="switchery-toggle">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Switchery Toggle</h4>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Switchery Toggle</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>To set Switchery toggle, add <code>.switchery</code> class to
                                    checkbox.
                                </p>
                                <div class="form-group pb-1">
                                    <input type="checkbox" id="switchery" class="switchery" checked/>
                                    <label for="switchery" class="font-medium-2 text-bold-600 ml-1">Switchery Default</label>
                                </div>
                                <div class="form-group pb-1">
                                    <input type="checkbox" id="switchery1" class="switchery" />
                                    <label for="switchery1" class="font-medium-2 text-bold-600 ml-1">Switchery Unchecked</label>
                                </div>
                                <div class="form-group pb-1">
                                    <input type="checkbox" id="switchery2" class="switchery" checked disabled/>
                                    <label for="switchery2" class="font-medium-2 text-bold-600 ml-1">Switchery Checked &amp; Disabled</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="switchery3" class="switchery" disabled/>
                                    <label for="switchery3" class="font-medium-2 text-bold-600 ml-1">Switchery Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Right Switchery Toggle</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p> To set Switchery toggle to right, wrap checkbox with <code>.float-right</code>                      class.</p>
                                <div class="form-group pb-1">
                                    <div class="float-right">
                                        <input type="checkbox" name="switchery" id="switchery0" class="switchery" checked/>
                                    </div>
                                    <label for="switchery0" class="font-medium-2 text-bold-600">Switchery Default</label>
                                </div>
                                <div class="form-group pb-1">
                                    <div class="float-right">
                                        <input type="checkbox" name="switchery" id="switchery01" class="switchery" />
                                    </div>
                                    <label for="switchery01" class="font-medium-2 text-bold-600">Switchery Unchecked</label>
                                </div>
                                <div class="form-group pb-1">
                                    <div class="float-right">
                                        <input type="checkbox" name="switchery" id="switchery02" class="switchery" checked
                                               disabled/>
                                    </div>
                                    <label for="switchery02" class="font-medium-2 text-bold-600">Switchery Checked &amp; Disabled</label>
                                </div>
                                <div class="form-group">
                                    <div class="float-right">
                                        <input type="checkbox" name="switchery" id="switchery03" class="switchery" disabled/>
                                    </div>
                                    <label for="switchery03" class="font-medium-2 text-bold-600">Switchery Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Switchery Sizes</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group ">
                                    <input type="checkbox" id="switcherySize" class="switchery" data-size="lg" checked/>
                                    <label for="switcherySize" class="font-medium-2 text-bold-600 ml-1">Large Switchery</label>
                                    <p class="text-muted"> To set Large Switchery toggle, add <code>data-size="lg"</code>                        to checkbox with <code>.switchery</code> class.</p>
                                </div>
                                <div class="form-group mt-1">
                                    <input type="checkbox" id="switcherySize1" class="switchery" checked/>
                                    <label for="switcherySize1" class="font-medium-2 text-bold-600 ml-1">Default Switchery</label>
                                    <p class="text-muted"> To set Default Switchery toggle, add <code>.switchery</code>                        class to checkbox.</p>
                                </div>
                                <div class="form-group mt-1">
                                    <input type="checkbox" id="switcherySize2" class="switchery" data-size="sm" checked/>
                                    <label for="switcherySize2" class="font-medium-2 text-bold-600 ml-1">Small Switchery</label>
                                    <p class="text-muted"> To set Small Switchery toggle, add <code>data-size="sm"</code>                        to checkbox with <code>.switchery</code> class.</p>
                                </div>
                                <div class="form-group mt-1">
                                    <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                                    <label for="switcherySize3" class="font-medium-2 text-bold-600 ml-1">Extra Small Switchery</label>
                                    <p class="text-muted"> To set Extra Small Switchery toggle, add <code>data-size="xs"</code>                        to checkbox with <code>.switchery</code> class.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Switchery Labels on both sides</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group pb-1">
                                    <label for="switcherySize10" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                    <input type="checkbox" id="switcherySize10" class="switchery" data-size="lg" checked/>
                                    <label for="switcherySize10" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                </div>
                                <div class="form-group mt-1 pb-1">
                                    <label for="switcherySize11" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                    <input type="checkbox" id="switcherySize11" class="switchery" checked/>
                                    <label for="switcherySize11" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                </div>
                                <div class="form-group mt-1 pb-1">
                                    <label for="switcherySize12" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                    <input type="checkbox" id="switcherySize12" class="switchery" data-size="sm" checked/>
                                    <label for="switcherySize12" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                </div>
                                <div class="form-group mt-1">
                                    <label for="switcherySize13" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                    <input type="checkbox" id="switcherySize13" class="switchery" data-size="xs" checked/>
                                    <label for="switcherySize13" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Switchery Switch end -->
        <!-- Template Color Switchery start -->
        <section class="theme-switchery" id="theme-switchery">
            <div class="row">
                <div class="col-12">
                    <h4>Template Color Switchery</h4>
                    <hr>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Color Switchery</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group ">
                                    <input type="checkbox" id="switcheryColor" class="switchery" data-color="primary"
                                           checked/>
                                    <label for="switcheryColor" class="card-title ml-1">Primary Color Switchery</label>
                                </div>
                                <div class="form-group mt-1">
                                    <input type="checkbox" id="switcheryColor4" class="switchery" data-color="success"
                                           checked/>
                                    <label for="switcheryColor4" class="card-title ml-1">Success Switchery</label>
                                </div>
                                <div class="form-group mt-1">
                                    <input type="checkbox" id="switcheryColor3" class="switchery" data-color="danger"
                                           checked/>
                                    <label for="switcheryColor3" class="card-title ml-1">Danger Switchery</label>
                                </div>
                                <div class="form-group mt-1">
                                    <input type="checkbox" id="switcheryColor2" class="switchery" data-color="info" checked/>
                                    <label for="switcheryColor2" class="card-title ml-1">Info Switchery</label>
                                </div>
                                <div class="form-group mt-1">
                                    <input type="checkbox" id="switcheryColor1" class="switchery" data-color="warning"
                                           checked/>
                                    <label for="switcheryColor1" class="card-title ml-1">Warning Switchery</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">COLOR SWITCHERY WITH LABELS ON BOTH SIDES</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group row overflow-hidden">
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor10" class="card-title primary ">Primary Color Label &amp; Switchery</label>
                                    </div>
                                    <div class="col-sm-4 col-2 text-center mb-1">
                                        <input type="checkbox" id="switcheryColor10" class="switchery" data-color="primary"
                                               checked/>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor10" class="card-title primary ">Primary Color Label &amp; Switchery</label>
                                    </div>
                                </div>
                                <div class="form-group row overflow-hidden mt-1">
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor14" class="card-title success">Success Color Label &amp; Switchery</label>
                                    </div>
                                    <div class="col-sm-4 col-2 text-center mb-1">
                                        <input type="checkbox" id="switcheryColor14" class="switchery" data-color="success"
                                               checked/>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor14" class="card-title success">Success Color Label &amp; Switchery</label>
                                    </div>
                                </div>
                                <div class="form-group row overflow-hidden mt-1">
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor13" class="card-title danger">Danger Color Label &amp; Switchery</label>
                                    </div>
                                    <div class="col-sm-4 col-2 text-center mb-1">
                                        <input type="checkbox" id="switcheryColor13" class="switchery" data-color="danger"
                                               checked/>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor13" class="card-title danger">Danger Color Label &amp; Switchery</label>
                                    </div>
                                </div>
                                <div class="form-group row overflow-hidden mt-1">
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor12" class="card-title info">Info Color Label &amp; Switchery</label>
                                    </div>
                                    <div class="col-sm-4 col-2 text-center mb-1">
                                        <input type="checkbox" id="switcheryColor12" class="switchery" data-color="info"
                                               checked/>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor12" class="card-title info">Info Color Label &amp; Switchery</label>
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor11" class="card-title warning">Warning Color Label &amp; Switchery</label>
                                    </div>
                                    <div class="col-sm-4 col-2 text-center overflow-hidden mb-1">
                                        <input type="checkbox" id="switcheryColor11" class="switchery" data-color="warning"
                                               checked/>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <label for="switcheryColor11" class="card-title warning">Warning Color Label &amp; Switchery</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Template Color Switchery end-->
    </div>

    <div class="content-body">
        <!-- Input Validation start -->
        <section class="input-validation">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Inputs Validation</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <p>Add <code>novalidate</code> attribute to form tag.</p>
                                <form class="form-horizontal" novalidate>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <h5>Basic Text Input
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required">
                                                </div>
                                                <p>Add <code>required</code> attribute to field for required
                                                    validation.
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <h5>Email Field
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Repeat Email Field
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="email" name="email2" data-validation-match-match="email" class="form-control"
                                                           required>
                                                    <p>Add <code>data-validation-match-match</code> attribute
                                                        with the field name as value to match with it.</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Password Input Field
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Repeat Password Input Field
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="password" name="password2" data-validation-match-match="password" class="form-control"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Input with Right Icon
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls position-relative has-icon-right">
                                                    <input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required">
                                                    <div class="form-control-position">
                                                        <i class="la la-code-fork"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Input addon with Right Icon
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon5"><i class="la la-suitcase"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Maximum Character Length
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="maxChar" class="form-control" required data-validation-required-message="This field is required"
                                                           maxlength="10">
                                                </div>
                                                <p>Add <code>maxlength</code> attribute for maximum number
                                                    of characters to accept. Also use <code>data-validation-maxlength-message</code>                              attribute for maxlength failure message</p>
                                            </div>
                                            <div class="form-group">
                                                <h5>Minimum Character Length
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required"
                                                           minlength="6">
                                                    <p>Add <code>minlength</code> attribute for minimum number
                                                        of characters to accept. Also use <code>data-validation-minlength-message</code>                                attribute for minlength failure message</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Only Numbers
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Maximum Number
                                                    <span class="required">*</span>
                                                </h5>
                                                <small><i>Must be lower than 25</i></small>
                                                <div class="controls">
                                                    <input type="text" name="maxNum" class="form-control" required data-validation-required-message="This field is required"
                                                           max="25">
                                                </div>
                                                <p>Add <code>max</code> attribute for maximum number to
                                                    accept. Also use <code>data-validation-max-message</code>                              attribute for max failure message</p>
                                            </div>
                                            <div class="form-group">
                                                <h5>Minimum Number
                                                    <span class="required">*</span>
                                                </h5>
                                                <small><i>Must be higher than 10</i></small>
                                                <div class="controls">
                                                    <input type="text" name="minNum" class="form-control" required data-validation-required-message="This field is required"
                                                           min="10">
                                                </div>
                                                <p>Add <code>min</code> attribute for minimum number to
                                                    accept. Also use <code>data-validation-min-message</code>                              attribute for min failure message</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <h5>File Input Field
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="file" name="file" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Custom Required Message
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="textRange" class="form-control" required data-validation-required-message="This is custom message"
                                                           placeholder="Custom Message">
                                                    <p>Add <code>data-validation-required-message</code> attribute
                                                        for Custom required failure message</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Text Input Range
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"
                                                           minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Input with Button
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Button on right" required>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-warning" type="button">
                                                                <i class="la la-pencil"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Touchspin</h5>
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control touchspin" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>No Characters, Only Numbers
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+"
                                                           data-validation-containsnumber-message="No Characters Allowed, Only Numbers">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Pattern
                                                    <span class="required">*</span>
                                                    <small><i>Must start with 'a' and end with 'z'</i></small>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'"
                                                           class="form-control" required>
                                                    <p>Add <code>pattern</code> attribute to set input pattern.
                                                        Also use <code>data-validation-pattern-message</code>                                attribute for pattern failure message</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Enter URL
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" class="form-control" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*"
                                                           data-validation-regex-message="Only Valid URL's">
                                                    <p>Add <code>data-validation-regex-regex</code> attribute
                                                        for regular expression. Also use <code>data-validation-regex-message</code>                                attribute for regex failure message</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Enter Email Address
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                                                           data-validation-regex-message="Enter Valid Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Enter Date
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" class="form-control" placeholder="MM/DD/YYYY" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                                                           data-validation-regex-message="Enter Valid Date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Basic Select
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <select name="select" id="select" required class="form-control">
                                                        <option value="">Select Your City</option>
                                                        <option value="1">Amsterdam</option>
                                                        <option value="2">Antwerp</option>
                                                        <option value="3">Athens</option>
                                                        <option value="4">Barcelona</option>
                                                        <option value="5">Berlin</option>
                                                        <option value="6">Birmingham</option>
                                                        <option value="7">Bradford</option>
                                                        <option value="8">Bremen</option>
                                                        <option value="9">Brussels</option>
                                                        <option value="10">Bucharest</option>
                                                        <option value="11">Budapest</option>
                                                        <option value="12">Cologne</option>
                                                        <option value="13">Copenhagen</option>
                                                        <option value="14">Dortmund</option>
                                                        <option value="15">Dresden</option>
                                                        <option value="16">Dublin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Basic Textarea
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <textarea name="textarea" id="textarea" class="form-control" required placeholder="Basic Textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">Submit <i class="la la-thumbs-o-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger">Reset <i class="la la-refresh position-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Input Validation end -->
        <!-- Checkbox Validation start -->
        <section class="checkbox-validation">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Checkbox Validation</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form-horizontal" novalidate>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Basic Checkbox </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="skin skin-square">
                                                                <input type="checkbox" value="" id="single_checkbox" required>
                                                                <label for="single_checkbox">I am unchecked Checkbox</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Checkbox Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" name="basic_checkbox" required id="check_group1">
                                                                    <label for="check_group1">I am unchecked Checkbox</label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" name="basic_checkbox" id="check_group2">
                                                                    <label for="check_group2">I am unchecked too</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Inline Checkbox Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="skin skin-square">
                                                                <input type="checkbox" value="" name="inline_checkbox" required id="check_inline1">
                                                                <label for="check_inline1">I am unchecked Checkbox</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="checkbox" value="" name="inline_checkbox" id="check_inline2">
                                                                <label for="check_inline2">I am unchecked too</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="checkbox" value="" name="inline_checkbox" id="check_inline3">
                                                                <label for="check_inline3">You can check me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Maximum Checkbox selection</strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!"
                                                                           name="max_checkbox" required id="check_max1">
                                                                    <label for="check_max1">I am unchecked Checkbox</label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" name="max_checkbox" id="check_max2">
                                                                    <label for="check_max2">I am unchecked too</label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" name="max_checkbox" id="check_max3">
                                                                    <label for="check_max3">You can check me</label>
                                                                </div>
                                                            </div>
                                                            <p>Select any 2 options</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Minimum Checkbox selection</strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two"
                                                                           name="min_checkbox" required id="check_min1">
                                                                    <label for="check_min1">I am unchecked Checkbox</label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" name="min_checkbox" id="check_min2">
                                                                    <label for="check_min2">I am unchecked too</label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="" name="min_checkbox" id="check_min3">
                                                                    <label for="check_min3">You can check me</label>
                                                                </div>
                                                            </div>
                                                            <p>Select any 2 options</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Radio Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="1" name="basic_radio" required id="radio1">
                                                                <label for="radio1">Check Me</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="2" name="basic_radio" id="radio2">
                                                                <label for="radio2">Or Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Inline Radio Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="Yes" name="inline_radio" required id="radio_inline1">
                                                                <label for="radio_inline1">Check Me</label>
                                                            </div>
                                                            <div class="skin skin-square">
                                                                <input type="radio" value="No" name="inline_radio" id="radio_inline2">
                                                                <label for="radio_inline2">Or Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Styled Checkbox </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" required value="single" name="styled_single_checkbox" class="custom-control-input"
                                                                       id="customCheck">
                                                                <label class="custom-control-label" for="customCheck">Check this custom checkbox</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Styled Checkbox Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" required value="x" name="styled_checkbox" required class="custom-control-input"
                                                                       id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">I am unchecked Checkbox</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" required value="y" name="styled_checkbox" class="custom-control-input"
                                                                       id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">I am unchecked too</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Inline Styled Checkbox Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="x" name="styled_inline_checkbox" required class="custom-control-input"
                                                                       id="customCheck3">
                                                                <label class="custom-control-label" for="customCheck3">I am unchecked Checkbox</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="y" name="styled_inline_checkbox" class="custom-control-input"
                                                                       id="customCheck4">
                                                                <label class="custom-control-label" for="customCheck4">I am unchecked too</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="c" name="styled_inline_checkbox" class="custom-control-input"
                                                                       id="customCheck5">
                                                                <label class="custom-control-label" for="customCheck5">You can check me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Maximum Styled Checkbox selection</strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="styled_max_checkbox" data-validation-maxchecked-maxchecked="2"
                                                                       data-validation-maxchecked-message="Don't be greedy!"
                                                                       required class="custom-control-input" id="customCheck6">
                                                                <label class="custom-control-label" for="customCheck6">I am unchecked Checkbox</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="styled_max_checkbox" class="custom-control-input" id="customCheck7">
                                                                <label class="custom-control-label" for="customCheck7">I am unchecked too</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="styled_max_checkbox" class="custom-control-input" id="customCheck8">
                                                                <label class="custom-control-label" for="customCheck8">You can check me</label>
                                                            </div>
                                                        </div>
                                                        <p>Select any 2 options</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Minimum Styled Checkbox selection</strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two"
                                                                       name="styled_min_checkbox" required class="custom-control-input"
                                                                       id="customCheck9">
                                                                <label class="custom-control-label" for="customCheck9">I am unchecked Checkbox</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="2" name="styled_min_checkbox" class="custom-control-input"
                                                                       id="customCheck10">
                                                                <label class="custom-control-label" for="customCheck10">I am unchecked too</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="3" name="styled_min_checkbox" class="custom-control-input"
                                                                       id="customCheck11">
                                                                <label class="custom-control-label" for="customCheck11">You can check me</label>
                                                            </div>
                                                        </div>
                                                        <p>Select any 2 options</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Styled Radio Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" value="1" name="styled_radio" required id="styled_radio1" class="custom-control-input">
                                                                <label class="custom-control-label" for="styled_radio1">Check me</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" value="2" name="styled_radio" required id="styled_radio2" class="custom-control-input">
                                                                <label class="custom-control-label" for="styled_radio2">Or me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>
                                                            <strong>Inline Styled Radio Group </strong>
                                                            <span class="required">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" value="Yes" name="styled_inline_radio" required id="styled_radio_inline1"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="styled_radio_inline1">Check me</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" value="No" name="styled_inline_radio" id="styled_radio_inline2"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="styled_radio_inline2">Or me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">Submit <i class="la la-thumbs-o-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger">Reset <i class="la la-refresh position-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkbox Validation end -->
        <!-- Switch Validation start -->
        <section class="switch-validation">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Switch Validation</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-contenet">
                            <div class="card-body">
                                <form class="form-horizontal" novalidate>
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                                <h5>
                                                    <strong>Single Switch </strong>
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="checkbox" name="single_switch" id="single_switch" class="switchBootstrap"
                                                           required>
                                                    <span class="ml-1">
                                <label for="single_switch">I am unchecked Switch</label>
                              </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>
                                                    <strong>Switch Group </strong>
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <div class="pb-1">
                                                        <input type="checkbox" class="switchBootstrap" name="basic_switch" required id="switch_group1">
                                                        <span class="ml-1">
                                  <label for="switch_group1">I am unchecked Switch</label>
                                </span>
                                                    </div>
                                                    <div class="pb-1">
                                                        <input type="checkbox" class="switchBootstrap" name="basic_switch" id="switch_group2">
                                                        <span class="ml-1">
                                  <label for="switch_group2">I am unchecked too</label>
                                </span>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="switchBootstrap" name="basic_switch" id="switch_group3">
                                                        <span class="ml-1">
                                  <label for="switch_group3">You can check me</label>
                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>
                                                    <strong>Inline Switch Group </strong>
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <div class="pb-1">
                                                        <input type="checkbox" class="switchBootstrap" name="inline_switch" required id="switch_inline1">
                                                        <span class="ml-1">
                                  <label for="switch_inline1">I am unchecked Switch</label>
                                </span>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="switchBootstrap" name="inline_switch" id="switch_inline2">
                                                        <span class="ml-1">
                                  <label for="switch_inline2">I am unchecked too</label>
                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                                <h5>
                                                    <strong>Single Switchery </strong>
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="checkbox" name="single_switchery" class="switchery" required>
                                                    <span class="ml-1">I am unchecked Switchery</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>
                                                    <strong>Switchery Group </strong>
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <div class="pb-1">
                                                        <input type="checkbox" class="switchery" name="basic_switchery" required id="switchery_group1">
                                                        <span class="ml-1">
                                  <label for="switchery_group1">I am unchecked Switchery</label>
                                </span>
                                                    </div>
                                                    <div class="pb-1">
                                                        <input type="checkbox" class="switchery" name="basic_switchery" id="switchery_group2">
                                                        <span class="ml-1">
                                  <label for="switchery_group2">I am unchecked too</label>
                                </span>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="switchery" name="basic_switchery" id="switchery_group3">
                                                        <span class="ml-1">
                                  <label for="switchery_group3">You can check me</label>
                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>
                                                    <strong>Inline Switchery Group </strong>
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <div class="pb-1">
                                                        <input type="checkbox" class="switchery" name="inline_switchery" required id="switchery_inline1">
                                                        <span class="ml-1">
                                  <label for="switchery_inline1">I am unchecked Switchery</label>
                                </span>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="switchery" name="inline_switchery" id="switchery_inline2">
                                                        <span class="ml-1">
                                  <label for="switchery_inline2">I am unchecked too</label>
                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger">Reset <i class="ft-refresh-cw position-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Switch Validation end -->
    </div>

    <div class="content-body">
        <!-- Pick-A-Date Picker start -->
        <section id="pick-a-date">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pick-A-Date Picker</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <p>Pickadate.js is a mobile-friendly, responsive, and lightweight jQuery
                            date &amp; time input picker.</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Basic Pick-a-date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate" placeholder="Basic Pick-a-date"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate</code> class for basic Pick-A-Date Picker.
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Pick-a-date with short string</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate-short-string" placeholder="String Short of Month &amp; Week"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-short-string</code> class for short
                                            Month &amp; Week String. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Year</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate-select-year" placeholder="Select Year"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-select-year</code> class to allow user
                                            to select year. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Change First Weekday</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate-firstday" placeholder="First Weekday to Monday"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-firstday</code> class to change first
                                            weekday to Monday. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Change/Hide Buttons</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate-buttons" placeholder="Hide/Change Buttons"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-buttons</code> class to change/hide
                                            buttons. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Limits</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate-limits" placeholder="Date Limits"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-limits</code> class to give selection
                                            from range of some dates. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Change Formats</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate-format" placeholder="Change Formats"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-format</code> class to change date display
                                            formats. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Change Arrows</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickadate-arrow" placeholder="Change Formats"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-arrow</code> class to change date display
                                            formats. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Picker Translation</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickadate-translations" placeholder="In Another Language"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-translations</code> class for language
                                            translation.
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Disable days of the week</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickadate-disable-weekday" placeholder="Disable days of the week"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Disable certain days of the week, such as all Saturdays (7th
                                            day of week) and Sundays (1st day of week), by passing
                                            an integer between 1 and 7</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Disable arbitrary dates</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickadate-disable-dates" placeholder="Disable Dates"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Pass an array of arbitrary dates (each formatted as [ yyyy,
                                            mm, dd ]) to disable them..</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Month &amp; Year Selectors</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickadate-selectors" placeholder="Month &amp; Year Selector"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-selectors</code> class to set month
                                            &amp; year selectable.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Month &amp; Year Dropdown</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickadate-dropdown" placeholder="Month &amp; Year Dropdown"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-dropdown</code> class to set <code>select</code>                          to month and year selection</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Picker Events</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickadate-events" placeholder="Open console to check events"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-events</code> class to check events
                                            as the user interacts with the picker.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Minimum and maximum date range</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickadate-minmax" placeholder="In Another Language"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar-o"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-minmax</code> class for language translation.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Disable picker for native calendar</label>
                                        <div class="row">
                                            <div class="col-lg-12 mb-1">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="la la-calendar-o"></span>
                                </span>
                                                    </div>
                                                    <input id="picker_from" class="form-control datepicker" type="date">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="la la-calendar-o"></span>
                                </span>
                                                    </div>
                                                    <input id="picker_to" class="form-control datepicker" type="date">
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use <code>.pickadate-nativ</code> class to change date display
                                            formats. </small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pick-A-Date Picker end -->
        <!-- Pick-A-Time Picker start -->
        <section id="pick-a-time">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pick-A-Time Picker</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Basic Pick-a-time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickatime" placeholder="Basic Pick-a-time"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickatime</code> class for basic Pick-A-Date Picker.
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Clear Button</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickatime-button" placeholder="Clear Button"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickatime-button</code> class to hide clear button.
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Change Formats</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickatime-format" placeholder="Change Formats"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickatime-format</code> class to change time display
                                            formats. </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Format Time Display</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickatime-formatTime" placeholder="Format Label"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickatime-formatTime</code> class to display time
                                            format.
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Format with Label</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickatime-formatlabel" placeholder="Format Label"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickatime-formatlabel</code> class to display
                                            time label format.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Minimum and maximum time range</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickatime-minmax" placeholder="Start &amp; End Time"
                                            />
                                        </div>
                                        <small class="text-muted">Use <code>.pickatime-minmax</code> class for Start Time &amp;
                                            End Time.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>From Current Time Limit</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                            <input type='text' class="form-control pickatime-limits" placeholder="Select Time"
                                            />
                                        </div>
                                        <small class="text-muted">Show previous 5 time limits and also shows current time Limit.</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Intervals</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickatime-intervals" placeholder="Date Intervals"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use <code>.pickatime-intervals</code> class to display time
                                            in Intervals.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Disable set of Time</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickatime-disable" placeholder="Disable set of Time"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Disable a specific or arbitrary set of times selectable on
                                            the picker.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Disable set of time using Integers</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickatime-disable-integer" placeholder="Disable set of Time"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Using integers as hours (0 to 23)</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Disable set of time using Object</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickatime-disable-object" placeholder="Disable set of Time"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Using objects as a range of times</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Disable All with exceptions</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickatime-disable-all" placeholder="Disable All with exceptions"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Enable only a specific or arbitrary set of times by setting
                                            true as the first item in the collection</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Close on a user action</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickatime-close-action" placeholder="Close on Action"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">When a time is selected or the "clear" button is pressed,
                                            the picker closes.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Picker Events</label>
                                        <div class="input-group">
                                            <input type='text' class="form-control pickatime-events" placeholder="Open console to check events"
                                            />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="ft-clock"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">The onSet event is the only callback that is passed a context
                                            argument that provides details as to which properties are
                                            being "set".</small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pick-A-Time Picker end -->
        <!-- Bootstrap DateRange Picker start -->
        <section id="daterange">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bootstrap DateRange Picker</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Basic Date Range Picker</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control daterange" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">The Date Range Picker is attached to a text input. It will
                                            use the current value of the input to initialize, and update
                                            the input if new dates are chosen.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Date and Time</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control datetime" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">The Date Range Picker can also be used to select times. Hour,
                                            minute and (optional) second dropdowns are added below
                                            the calendars. An option exists to set the increment count
                                            of the minutes dropdown to e.g. offer only 15-minute or
                                            30-minute increments.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>24 hour Time Picker with Seconds</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control timeseconds" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Use 24-hour instead of 12-hour times, removing the AM/PM
                                            selection. Show seconds in the timePicker</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Single Date Picker</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control singledate" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">The Date Range Picker can be turned into a single date picker
                                            widget with only one calendar. In this example, dropdowns
                                            to select a month and year have also been enabled at the
                                            top of the calendar to quickly jump to different months.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Apply Date Range</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control autoapply" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted"> Hide the apply and cancel buttons, and automatically apply
                                            a new date range as soon as two dates or a predefined range
                                            is selected</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Not Linked Calendars</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control linkedCalendars" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">When enabled, the two calendars displayed will always be
                                            for two sequential months (i.e. January and February),
                                            and both will be advanced when clicking the left or right
                                            arrows above the calendars. When disabled, the two calendars
                                            can be individually advanced and display any month/year.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Not Linked Calendars</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control linkedCalendars" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">When enabled, the two calendars displayed will always be
                                            for two sequential months (i.e. January and February),
                                            and both will be advanced when clicking the left or right
                                            arrows above the calendars. When disabled, the two calendars
                                            can be individually advanced and display any month/year.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Limit</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control dateLimit" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">The maximum span between the selected start and end dates</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Show Dropdowns</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control showdropdowns" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Show year and month select boxes above calendars to jump
                                            to a specific month and year</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Show Week Numbers</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control showweeknumbers" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Show localized week numbers at the start of each week on
                                            the calendars</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Predefined Ranges</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control dateranges" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Set predefined date ranges the user can select from. Each
                                            key is the label for the range, and its value an array
                                            with two dates representing the bounds of the range</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Always Show Calendar</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control shawCalRanges" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Normally, if you use the ranges option to specify pre-defined
                                            date ranges, calendars for choosing a custom date range
                                            are not shown until the user clicks "Custom Range". When
                                            this option is set to true, the calendars for choosing
                                            a custom date range are always shown instead.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Localization</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control localeRange" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Allows you to provide localized strings for buttons and labels,
                                            customize the date display format, and change the first
                                            day of week for the calendars.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Picker Alignment</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control openRight" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Whether the picker appears aligned to the left, to the right,
                                            or centered under the HTML element it's attached to.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Open Picker on top</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control drops" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Whether the picker appears below (default) or above the HTML
                                            element it's attached to.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Button Class Options</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control buttonClass" />
                                            <div class="input-group-append">
                            <span class="input-group-text">
                              <span class="la la-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                        <small class="text-muted">CSS class names that will be added to all buttons in the
                                            picker.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap DateRange Picker end -->
    </div>
@endsection
