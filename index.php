<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Bronagh Hrs</title>
    <style type="text/css">
        body {
            font-family: 'Quicksand';
        }

        #toastr {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 30px;
            border-radius: 8px;
            display: none;
            margin-top: 10px;
            margin-bottom: 25px;
        }

        #toastr.success {
            background-color: rgba(40, 167, 69, .8);
        }

        #toastr.error {
            background-color: rgba(220, 53, 69, .8);
        }

        .loader-overlay {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, .8);
            display: table;
            z-index: -1;
            text-align: center;
            visibility: hidden;
            opacity: 0;
            padding-top: 4%;
        }

        .loader-text {
            display: table-cell;
            vertical-align: top;
            font-size: 24px;
            font-style: italic;
            color: #84D760;
            font-weight: bold;
        }

        .loader-overlay.show {
            visibility: visible;
            opacity: 1;
            z-index: 1;
        }

        .error {
            padding: 2px 5px;
            font-size: 12px;
            margin-top: -22px;
            margin-bottom: 10px;
        }

        .mt-2 {
            margin-top: 2%;
        }

        .mt-2 {
            margin-bottom: 2%;
        }

        label {
            font-weight: bold;
            font-size: 0.8rem !important;
        }

        .form {
            box-shadow: 0px 0px 15px #aaa;
        }

        .form input[type="email"],
        .form input[type="number"],
        .form input[type="password"],
        .form input[type="text"],
        .form select,
        .form textarea,
        .form input {
            height: 38px;
            /*margin-bottom: 0px;*/
        }

        .form input {
            padding-right: 16px !important;
        }

        .table input,
        .table select {
            margin-bottom: 0px !important
        }

        .hidden {
            display: none;
        }

        .bg-gray {
            background: #eee;
        }

        .table td,
        .table th {
            font-size: 14px;
        }

        td input {
            margin-bottom: 3px !important;
        }

        .error {
            margin-top: 0px;
        }

        label.error {
            padding: 2px 5px;
            font-size: 11px !important;
            margin-top: -24px;
            color: red !important;
        }

        .header {
            /* background: url(assets/img/bg.png) no-repeat center center/cover; */
            height: 260px;
        }

        .header h1 {
            text-shadow: 3px 2px 2px #000;
            color: black;
            margin-top: -36px;
        }

        .form .accordion {
            margin-top: 0px;
        }

        .btn-theme {
            background-image: linear-gradient(-180deg, #12275c 0%, #12275c6b 100%);
            margin-bottom: 20px;
            color: #fff;
            font-weight: bold;
        }

        .btn-theme:hover,
        .btn-theme:active,
        .btn-theme:focus {
            background-image: linear-gradient(360deg, #12275c 0%, #12275c6b 100%);
            color: #fff;
        }

        .form textarea {
            height: auto !important;
        }

        .form .accordion .card .collapse.show {
            padding: 0 30px !important;
        }

        .remove-item {
            position: absolute;
            right: 30px;
            top: 24px;
        }

        .form .accordion .card-header {
            padding: 20px 30px !important
        }

        .radio {
            height: 18px !important;
        }


        /* Select 2 custom css */
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 38px;
        }

        .select2-container--default .select2-selection--single {
            /* background: rgba(0, 0, 0, 0.7); */
            height: 38px;
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border: none;
            border-left: 3px solid transparent;
            font-size: 16px;
            -o-transition: all .5s;
            -webkit-transition: all .5s;
            transition: all .5s;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 38px;
            /* color: white; */
        }

        .select2 {
            width: 100% !important;
        }

        /* Select 2 custom css */


        @media(max-width: 768px) {

            input,
            select,
            textarea {
                margin-bottom: 10px !important;
            }

            #generalInfo,
            .item-card {
                padding-bottom: 10px !important;
            }

            .header {
                height: 210px;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Bronagh Hrs</h1>
    </div>
    <div class="container">
        <div class="form">
            <div id="toastr" class="success">Data saved</div>
            <form action="https://script.google.com/macros/s/AKfycbycZVsCCrIw2SdinBwBwQ95yG3Qn4BI4DWTEitSqQ/exec" method="post" class="accordion" id="formValues">
                <div class="card">
                    <div class="loader-overlay">
                        <div class="loader-text">Loading...</div>
                    </div>
                    <div class="card-header">
                        <button class="btn btn-link" type="button">
                            <span><i class="fa fa-user"></i></span> General Information
                        </button>
                    </div>

                    <div id="generalInfo" class="collapse show">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" name="day" class="day" value="">
                                <input type="hidden" class="week" name="week" value="">
                                <input type="hidden" class="month" name="month" value="">
                                <input type="hidden" class="year" name="year" value="">
                                <input type="hidden" name="ref" class="ref" value="">
                                <label>Date *</label>
                                <input type="text" name="Date" placeholder="Enter Date" class="date required" readonly="" />
                            </div>
                            <div class="col-lg-6">
                                <label>Team Member Name *</label>
                                <input type="text" name="member_name" class="member_name  required" value="<?php echo $_GET['name'] ?>" />

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card item-card" id="cart-item-1">
                    <div class="card-header">
                        <button class="btn btn-link" type="button">
                            <span><i class="fa fa-cart-plus"></i></span> Item <font class="item-count">1</font>
                        </button>
                    </div>

                    <div class="collapse show">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="type">Type *</label>
                                        <select name="type[]" id="" class="type required">
                                            <option value="" selected disabled>--Select--</option>
                                            <option value="Billable"> Billable</option>
                                            <option value="Non billable">Non Billable</option>
                                        </select>
                                        <!-- <div class="d-flex">
                                            <div class="col-lg-3">
                                                <label for="type1"> Billable</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="radio" id="type1" name="type[]" value="billable" class="radio" required />
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="type2">Non Billable</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="radio" id="type2" name="type[]" value="non billable" class="radio" required />
                                            </div>
                                        </div> -->
                                    </div>

                                    <!-- Non Billable field -->
                                    <div class="col-lg-6 hidden non_billable_field">
                                        <label for="activity">Activity</label>
                                        <input type="text" name="activity[]" id="" class="activity required">
                                    </div>


                                    <!-- Billable Field -->

                                    <div class="col-lg-6 billable_field hidden">
                                        <label for="job">Job</label>
                                        <select name="job[]" id="" class="job select-2 required">
                                        </select>
                                    </div>

                                    <div class="col-lg-6  billable_field hidden">
                                        <label for="project">Project</label>
                                        <input type="text" name="project[]" readonly id="" class="project required">
                                    </div>
                                    <div class="col-lg-6  billable_field hidden">
                                        <label for="client">Client</label>
                                        <input type="text" name="client[]" readonly id="" class="client required">
                                    </div>




                                    <!-- Common field -->

                                    <div class="col-lg-6 hidden common">
                                        <label for="hours">hours</label>
                                        <select name="hours[]" id="" class="hours select-2 required">
                                        </select>
                                    </div>
                                    <div class="col-lg-6 hidden common">
                                        <label for="comment">Comment</label>
                                        <input type="text" name="comment[]" id="" class="comment required">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cart-items"></div>
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <button class="btn btn-theme btn-sm add-more" type="button"><i class="fa fa-plus"></i> item to Add </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-theme" id="submit">Submit Form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="footer">

        </div>
    </div>

    <!-- js -->
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        var items = 1;

        $(document).on('change', '.type', function() {
            var card = $(this).closest('.card');
            var value = card.find("select[name='type[]'] option:selected").val();
            console.log(value);
            if (value == "Billable") {
                card.find(".billable_field").removeClass("hidden");
                card.find(".common").removeClass("hidden");
                card.find(".non_billable_field").addClass("hidden");
            } else {

                card.find(".billable_field").addClass("hidden");
                card.find(".common").removeClass("hidden");
                card.find(".non_billable_field").removeClass("hidden");
            }
        });

        $(document).on("change", ".job", function() {
            var card = $(this).closest('.card');

            var client = card.find("select[name='job[]'] option:selected").attr("data-client");
            var project = card.find("select[name='job[]'] option:selected").attr("data-project");
            card.find(".project").val(project);
            card.find(".client").val(client);
        });

        $(".select-2").select2();


        function onSuccessSubmit() {
            $('html, body').animate({
                scrollTop: $('.header').offset().top
            }, 100);

            toastr('Form submitted, Thank you', 'success');
            // setTimeout(function() {
            //     window.location = window.location.href;
            // }, 2000);
        }

        function toastr(msg, type) {
            $('#toastr').text(msg);
            $('#toastr').removeClass('success');
            $('#toastr').removeClass('error');
            $('#toastr').addClass(type).fadeIn();
            setTimeout(function() {
                $('#toastr').fadeOut();
            }, 4000);
        }

        function validateForm() {
            var valid = true;
            $(".required:visible").each(function() {
                if ($(this).val() == "" || $(this).val() === null || ($(this).attr('type') == "radio" && $('[name="' + $(this).attr('name') + '"]:checked').val() == undefined)) {
                    $(this)
                        .closest("div")
                        .append('<div class="alert-danger">This field is required</div>');
                    valid = false;
                }
            });
            $(".select2-required").each(function() {
                if ($(this).val() == "" || $(this).val() === null) {
                    $(this)
                        .closest("div")
                        .append('<div class="alert-danger">This field is required</div>');
                    valid = false;
                }
            });
            if (!valid) {
                $('html, body').animate({
                    scrollTop: $('.alert-danger:first').offset().top
                }, 100);
            }
            return valid;
        }
        $('#formValues').submit(function(e) {
            e.preventDefault();
            if (!validateForm())
                return false;

            var form = $(this);
            var type = job = project = client = hours = comment = activity = "";
            var sum_hour = sum_minute = sum_time = 0;

            function addZero(val) {
                return val < 10 ? ('0' + val) : val;
            }

            function time(time) {
                // console.log(time, "getting value from card");
                var time_split = time.split(":");
                sum_hour = sum_hour + time_split[0] * 1;
                sum_minute = sum_minute + time_split[1] * 1;
                // console.log(sum_hour, sum_minute, ":sum hour and Sum minute");
                return sum_hour + ":" + sum_minute;
            }

            function time_diff(sum_time) {
                var time_split = sum_time.split(":");
                // console.log(time_split, "Time split");
                var hour = time_split[0] * 1;
                var minute = (time_split[1] * 1) / 60;
                // console.log("minute:" + minute);
                minute = minute.toString();
                var minu_deci = minute.split(".");
                // console.log(minu_deci, ": minute deci");
                hour = hour + (minu_deci[0] * 1);

                minute = 00;
                if (minu_deci[1] != undefined) {
                    minute = ("0." + minu_deci[1]) * 60;
                }

                return addZero(hour) + ":" + minute;

            }
            $('.card').each(function() {
                if ($(this).find(".type").length) {
                    type += $(this).find(".type").val() + "\n";
                    job += $(this).find(".job").val() + "\n";
                    project += $(this).find(".project").val() + "\n";
                    client += $(this).find(".client").val() + "\n";
                    sum_time = time($(this).find(".hours").val());
                    hours += $(this).find(".hours").val() + "\n";
                    comment += $(this).find(".comment").val() + "\n";
                    activity += $(this).find(".activity").val() + "\n";
                }
            });
            sum_time = time_diff(sum_time);
            console.log(sum_time, "After time diffrence function");
            // console.log(type, ":type", job, ":job", project, ":project", client, ":client", hours, ":hours", comment, ":comment", activity, ":activity");

            $('#submit').attr('disabled', 'disabled');
            $('#submit').text('Please wait..');
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(form).serialize() +
                    '&type=' + type.slice("\n", -1) +
                    '&job=' + job.slice("\n", -1) +
                    '&project=' + project.slice("\n", -1) +
                    '&client=' + client.slice("\n", -1) +
                    '&hours=' + hours.slice("\n", -1) +
                    '&comment=' + comment.slice("\n", -1) +
                    '&activity=' + activity.slice("\n", -1) +
                    '&sum_time=' + sum_time,

                success: function(response) {
                    onSuccessSubmit();
                },
                error: function(response) {
                    $('#submit').removeAttr('disabled');
                    $('#submit').text('Submit Form');
                    toastr('Error while submitting form', 'error');
                }
            });
        });
        // Add More
        $('.add-more').click(function() {
            $(".select-2").select2("destroy");
            if (items < 5) {
                var content = $('#cart-item-1').html();
                $('#cart-items').append('<div class="card item-card" id="cart-item-' + (items + 1) + '">' + content + '</div>');
                $('#cart-item-' + (items + 1)).find('input').val("");
                $('#cart-item-' + (items + 1)).find('#type1').val("Billable");
                $('#cart-item-' + (items + 1)).find('#type2').val("Non billable");
                $('#cart-item-' + (items + 1)).find('select').val("").change();
                $('#cart-item-' + (items + 1)).find('.item-count').text(items + 1);
                $('#cart-item-' + (items + 1)).append('<button type="button" class="remove-item btn btn-sm btn-danger"><i class="fa fa-times"></i></button>');
                $('#cart-item-' + (items + 1)).find('.billable_field').addClass('hidden');
                $('#cart-item-' + (items + 1)).find('.non_billable_field').addClass('hidden');
                $('#cart-item-' + (items + 1)).find('.common').addClass('hidden');
                items++;
                if (items == 5)
                    $(this).fadeOut();
            }
            $(".select-2").select2();
        });
        $(document).ready(function() {
            $('.date').datepicker({
                format: 'dd/mm/yyyy'
            });
            $.get('https://script.google.com/macros/s/AKfycbycZVsCCrIw2SdinBwBwQ95yG3Qn4BI4DWTEitSqQ/exec', function(response) {
                NominalCodes = response.NominalCodes;
                var hours = response.hours;
                var job_name = response.job;
                var project = response.project;
                var client = response.client;
                var status = response.status;
                $('[name="hours[]"]').append('<option value="" selected disabled>--Select--</option>');
                $('[name="job[]"]').append('<option value="" selected disabled>--Select--</option>');

                for (var i = 0; i < hours.length; i++) {
                    if (hours[i])
                        $('[name="hours[]"]').append('<option value="' + hours[i] + '">' + hours[i] + '</option>');
                }

                for (var i = 0; i < job_name.length; i++) {
                    if (status[i] == "Active") {
                        $('[name="job[]"]').append('<option data-client="' + client[i] + '" data-project="' + project[i] + '" value="' + job_name[i] + '">' + job_name[i] + '</option>');
                    }
                }
            });

            function addZero(val) {
                return val < 10 ? ('0' + val) : val;
            }
            var d = new Date();

            $('[name="ref"]').val(addZero(d.getDate()) + "" + addZero(d.getMonth() + 1) + "" + d.getFullYear() + "" + addZero(d.getHours()) + "" + addZero(d.getMinutes()));
            // Day name

            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            //For All character
            // var dayName1 = days[d.getDay()];

            //For first 3 character
            var dayName2 = d.toString().split(' ')[0];

            $(".day").val(
                dayName2
            );

            // Get week no of the year
            Date.prototype.getWeekNumber = function() {
                var d = new Date(Date.UTC(this.getFullYear(), this.getMonth(), this.getDate()));
                var dayNum = d.getUTCDay() || 7;
                d.setUTCDate(d.getUTCDate() + 4 - dayNum);
                var yearStart = new Date(Date.UTC(d.getUTCFullYear(), 0, 1));
                return Math.ceil((((d - yearStart) / 86400000) + 1) / 7)
            };


            $(".week").val(
                new Date().getWeekNumber()
            );

            // Month Name
            const month = d.toLocaleString('default', {
                month: 'short'
            });

            $(".month").val(
                month
            );
            $(".year").val(
                d.getFullYear()
            )
            $('[name="Date"]').val(
                addZero(d.getDate()) + '/' + addZero(d.getMonth() + 1) + '/' + d.getFullYear()
            );
            $(document).on('click', '.remove-item', function() {
                $(this).closest('.item-card').remove();
                var align = 1;
                $('.item-card').each(function() {
                    $(this).find('.item-count').text(align);
                    align++;
                });
                if (items == 5)
                    $('.add-more').fadeIn();

                items--;
            })
        });
    </script>
</body>

</html>