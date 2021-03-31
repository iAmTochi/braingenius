@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body wizard-content">
                    <h4 class="card-title">New Student</h4>
{{--                    <h6 class="card-subtitle">You can us the validation like what we did</h6>--}}
                    <form id="register-student" action="{{ route('student.store') }}" class="validation-wizard wizard-circle mt-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Step 1 -->
                        <h6>Student Information</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="last_name"> Surname Name :</label>
                                        <input required value="{{ old('last_name') }}" type="text" class="form-control" id="last_name" name="last_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name"> First Name : <span class="danger">*</span> </label>
                                        <input required type="text" class="form-control " id="first_name" name="first_name" value="{{ old('first_name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="other_name"> Other Name : <span class="danger">*</span> </label>
                                        <input  type="text" class="form-control" id="other_name" name="other_name" value="{{ old('other_name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="image"> Upload Student's Passport :</label>
                                        <input  type="file" class="form-control" id="image" name="image">
                                        <div class="text-primary">(JPG, JPEG or PNG. Max size: 50kb)</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="soo"> State of Origin : </label>
                                        <select required id="soo" name="soo" class="select2  @error('soo') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            @foreach($states as $state)
                                            <option value="{{ $state->id }}" {{ (old('soo') == $state->id)?'selected':''  }}>{{ $state->state_name }}</option>
                                            @endforeach
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('soo')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lga"> L.G.A :  </label>
                                        <select required id="lga" name="lga" class="select2  @error('lga') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            @foreach($lgas as $lga)
                                                <option value="{{ $lga->id }}" {{ (old('lga') == $lga->id)?'selected':''  }}>{{ $lga->lga_name }}</option>
                                            @endforeach
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('lga')}}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender"> Gender :</label>
{{--                                        <input  type="text" class="form-control" id="gender" name="gender">--}}
                                        <select required id="gender" name="gender" class="select2  @error('gender') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            <option value="m" {{ (old('gender') == 'm')?'selected':''  }}>Male</option>
                                            <option value="f" {{ (old('gender') == 'f')?'selected':''  }}>Female</option>
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('gender')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth :</label>
                                        <input required type="text" class="form-control mdate " id="dob" name="dob">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="religion">Religion :</label>
                                        <select id="religion" name="religion" class="select2  @error('religion') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            @foreach($religions as $religion)
                                                <option value="{{ $religion->id }}" {{ (old('religion') == $religion->id)?'selected':''  }}>{{ $religion->name }}</option>
                                            @endforeach
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('religion')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="genotype">Genotype :</label>
                                        <select  id="genotype" name="genotype" class="select2  @error('genotype') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            @foreach($genotypes as $genotype)
                                                <option value="{{ $genotype->id }}" {{ (old('genotype') == $genotype->id)?'selected':''  }}>{{ $genotype->name }}</option>
                                            @endforeach
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('genotype')}}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- Step 2 -->
                        <h6>Academic/Admission Information</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="admin_no">Admission No :</label>
                                        <input type="text" class="form-control" id="admin_no" name="admin_no" value="{{ old('admin_no') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class_arm">Present Class Arm :</label>
                                        <select id="class_arm" name="class_arm" class="select2 @error('class_arm') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            @foreach($classArms as $classArm)
                                            <option value="{{ $classArm->uuid }}" {{ (old('class_arm') == $classArm->uuid)?'selected':''  }}>  {{ $classArm->name.$classArm->arm }} </option>
                                            @endforeach
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('class_arm')}}</strong>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="residence_type">Residence Type :</label>
                                        <select id="residence_type" name="residence_type" class="select2  @error('residence_type') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            @foreach($residenceTypes as $type)
                                            <option value="{{ $type->id }}" {{ (old('residence_type') == $type->id)?'selected':''  }}>
                                                {{$type->name}}</option>
                                            @endforeach
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('residence_type')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="hostel"> Hostel : </label>
                                        <select id="hostel" name="hostel" class="select2  @error('hostel') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>

                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('hostel')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sport_house"> Sport House:  </label>
                                        <select id="sport_house" name="sport_house" class="select2  @error('sport_house') is-invalid @enderror" style="width: 100%">
                                            <option value=""></option>
                                            @foreach($sportHouses as $house)
                                            <option value="{{ $house->uuid }}" {{ (old('sport_house') == $house->uuid)?'selected':''  }}>{{ $house->name }}</option>
                                            @endforeach

                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('sport_house')}}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prev_sch">Previous School Attended (If any) :</label>
                                        <input type="text" class="form-control" id="prev_sch" name="prev_sch" value="{{ old('prev_sch') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_prev_sch">Date of Previous School :</label>
                                        <input  id="date_prev_sch" name="date_prev_sch" class="form-control mdate @error('date_prev_sch') is-invalid @enderror">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('date_prev_sch')}}</strong>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <!-- Step 3 -->
                        <h6>Parent Information</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pType"> Parent Type :  </label>
                                        <select id="pType" name="pType" class="select2 required @error('pType') is-invalid @enderror" style="width: 100%">
                                            <option value="1" {{ (old('pType') == 1)?'selected':''  }}>New Parent</option>
                                            <option value="2" {{ (old('pType') == 2)?'selected':''  }}>Existing Parent</option>
                                        </select>
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('pType')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4" id="existing-parent-username" style="display: none">
                                    <div class="form-group">
                                        <label for="pUsername"> Parent Username :  </label>
                                        <input type="text" class="form-control " id="pUsername" name="pUsername" value="{{ old('pUsername') }}" placeholder="Enter Username of Existing Parent here">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pTitle"> Title :  </label>
                                        <input type="text" class="parent form-control " id="pTitle" name="pTitle" value="{{ old('pTitle') }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="plast_name"> Surname Name : <span class="danger">*</span> </label>
                                        <input value="{{ old('plast_name') }}" type="text" class="parent form-control required" id="plast_name" name="plast_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pfirst_name"> First Name : <span class="danger">*</span> </label>
                                        <input type="text" class="parent form-control required" id="pfirst_name" name="pfirst_name" value="{{ old('pfirst_name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pother_name"> Other Name : <span class="danger">*</span> </label>
                                        <input type="text" class="parent form-control" id="pother_name" name="pother_name" value="{{ old('pother_name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pEmail"> Email Address :  </label>
                                        <input value="{{ old('pEmail') }}" type="email" class="parent form-control required" id="pEmail" name="pEmail">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pPhone"> Phone Number :  </label>
                                        <input type="text" class="parent form-control required" id="pPhone" name="pPhone" value="{{ old('pPhone') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="occupation"> Occupation : <span class="danger">*</span> </label>
                                        <input type="text" class="parent form-control" id="occupation" name="occupation" value="{{ old('occupation') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pimage"> Upload Parent Passport :</label>
                                        <input  type="file" class="parent form-control" id="pimage" name="pimage">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="home_address"> Home Address : </label>
                                        <input id="home_address" name="home_address" class="parent form-control required @error('home_address') is-invalid @enderror" >
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('home_address')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="office_address"> Office Address :  </label>
                                        <input id="office_address" name="office_address" class="parent form-control  @error('office_address') is-invalid @enderror" >
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('office_address')}}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="next_of_kin"> Next of Kin Name : </label>
                                        <input id="next_of_kin" name="next_of_kin" class="parent form-control  @error('next_of_kin') is-invalid @enderror" >
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('next_of_kin')}}</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="next_of_kin_phone"> Next of Kin Phone : </label>
                                        <input id="next_of_kin_phone" name="next_of_kin_phone" class="parent form-control  @error('next_of_kin_phone') is-invalid @enderror" >
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('next_of_kin_phone')}}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
    <link href="{{ asset('') }}assets/extra-libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/extra-libs/jquery-steps/steps.css" rel="stylesheet">


@endsection



@section('scripts')


    <script src="{{ asset('') }}assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="{{ asset('') }}assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>

    <link href="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script>

        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Register Student "
            },
            onStepChanging: function(event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function(event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function(event, currentIndex) {
                console.log('registering...');
                $('#register-student').submit();
                // swal("6Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        }),
            $(".validation-wizard").validate({
                ignore: "input[type=hidden]",
                errorClass: "text-danger",
                successClass: "text-success",
                highlight: function(element, errorClass) {
                    $(element).removeClass(errorClass)
                },
                unhighlight: function(element, errorClass) {
                    $(element).removeClass(errorClass)
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element)
                },
                rules: {
                    email: {
                        email: !0
                    }
                }
            })

        $('#pType').on('change', function () {
            $('.parent').removeAttr('readonly')
            $('.parent').val('');

            if($(this).val() === '2'){
                $('#existing-parent-username').show('slow')
                $('.parent').attr('readonly', 'readonly')
            } else {
                $('#existing-parent-username').hide('slow')
            }
        })



        // $('#').oncl
        // #register-student

        $('#finish').on('click', function () {
            console.log('registering...')

        });

        function ajaxHeader() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        }

        function register_student(data){
            ajaxHeader();
            $.ajax({
                url: "topup/transfer",
                method: "POST",
                data: data,
                success: function (data) {
                    if(data !== 'failed'){
                        $('#top_up_phone_no').val('');
                        $('#top_up_amount').val('');
                        $('#network_provider_vtu').val('');
                        $('#network_provider_data').val('');
                        $('#top_up_package').val('');

                        sendBtn();
                        $('#top_up_response').html(data).slideDown("slow").delay(4000).slideUp("slow");
                        $('#btn-send').text('Confirm and Send');
                        walletBalance();

                    }else if(data === 'insufficient funds'){
                        $('#top_up_response').html(data).slideDown("slow").delay(4000).slideUp("slow");
                    }
                }


            });
        }
    </script>

    <script src="{{ asset('') }}assets/libs/moment/moment.js"></script>
    <script src="{{ asset('') }}assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker-custom.js"></script>
    <script>
        // MAterial Date picker
        $('.mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false }); // for date of birth
    </script>
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('') }}assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset('') }}js/pages/forms/select2/select2.init.js"></script>

{{--    <script src="{{ asset('') }}assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>--}}
{{--    <script src="{{ asset('') }}assets/extra-libs/sweetalert2/sweet-alert.init.js"></script>--}}
{{--    @include('partials.sweet_alert')--}}

@endsection

