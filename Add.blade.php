@extends('layouts.main')
@section('title', 'नयाँ दर्ता')
@section('main_content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card my-2">
                        <div class="card-header">
                            <div>
                                <h5 class="text-center">{{ __('नयाँ दर्ता') }}</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('nayaDarta.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('कितावको पेज नं.') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="number" min="1" value="{{ old('book_page_no') }}"
                                                name="book_page_no"
                                                class="form-control  @error('book_page_no') is-invalid @enderror">
                                            @error('book_page_no')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('टोल फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="col-2">
                                        <!-- select -->
                                        <div class="form-group">
                                            <select name="anusuchi"
                                                class="custom-select @error('anusuchi') is-invalid @enderror">
                                                <option value="" selected>{{ __('--अनुसूची--') }}</option>
                                                @foreach ($anusuchi as $anusuchi)
                                                    <option value="{{ $anusuchi->name }}">
                                                        {{ $anusuchi->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('anusuchi')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('अपाङ्गताको प्रकार (गम्भीरता) को फिल्ड खाली छ |') }}
                                                </p>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('कितावको क्र.सं.') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="number" min="1" value="{{ old('book_sn_no') }}" name="book_sn_no"
                                                class="form-control  @error('book_sn_no') is-invalid @enderror">
                                            @error('book_sn')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('योजनाको नाम') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="text" value="{{ old('yojana_name') }}" name="yojana_name"
                                                class="form-control  @error('yojana_name') is-invalid @enderror">
                                            @error('yojana_name')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('टोल फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                    </div>

                                    {{-- start of 2nd row --}}
                                    {{-- <div class="col-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('उमेर') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="text" name="age"
                                                class="form-control @error('age') is-invalid @enderror"
                                                value="{{ old('age') }}">
                                            @error('age')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('उमेर फिल्ड खाली छ |') }}
                                                </p>
                                            @enderror
                                        </div>

                                        <!-- /input-group -->
                                    </div> --}}

                                    <div class="col-1">
                                        <!-- select -->
                                        <div class="form-group">
                                            <select name="ward_no"
                                                class="custom-select @error('ward_no') is-invalid @enderror" name="ward_no">
                                                <option value="">{{ __('--वार्ड छान्नुहोस्--') }}</option>
                                                @for ($i = 1; $i < 20; $i++)
                                                    <option value="{{ $i }}">{{ Nepali($i) }}</option>
                                                @endfor
                                            </select>
                                            @error('ward_no')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('टोल फिल्ड खाली छ |') }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- end of first row --}}
                                    <div class="col-4 my-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('विनियोजित बजेट') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="number" min="0" value="{{ old('budget') }}" name="budget"
                                                class="form-control  @error('budget') is-invalid @enderror">
                                            @error('budget')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    {{-- start of second row --}}
                                    <div class="col-4 my-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('लागत अनुमान') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="number" min="0" value="{{ old('estimate_budget') }}"
                                                name="estimate_budget"
                                                class="form-control  @error('estimate_budget') is-invalid @enderror">
                                            @error('estimate_budget')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>



                                    <div class="col-4 my-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('कन्टिन्जेन्सी रकम') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="number" min="0" value="{{ old('contingency_amount') }}"
                                                name="contingency_amount"
                                                class="form-control  @error('contingency_amount') is-invalid @enderror">
                                            @error('contingency_amount')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    {{-- end of second row --}}
                                    {{-- start of third row --}}
                                    <div class="col-4 my-2">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label for="" class="font-weight-light">बजेट श्रोत
                                                <span class="text-danger px-1 font-weight-bold">*</span> </label>
                                            <select name="budget_source"
                                                class="custom-select @error('budget_source') is-invalid @enderror">
                                                {{-- <option value="" selected>बजेट श्रोत *</option> --}}
                                                @foreach ($budgetSources as $budgetSource)
                                                    <option value="{{ $budgetSource->name }}">
                                                        {{ $budgetSource->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('budget_source')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('अपाङ्गताको प्रकार (गम्भीरता) को फिल्ड खाली छ |') }}
                                                </p>
                                            @enderror
                                        </div>

                                    </div>
                                    {{-- <div class="col-4 my-2">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label for="" class="font-weight-light">बजेट शिर्षक
                                                <span class="text-danger px-1 font-weight-bold">*</span> </label>
                                            <select name="budget_title"
                                                class="custom-select @error('budget_title') is-invalid @enderror">

                                                @foreach ($budgetTitles as $budgetTitle)
                                                    <option value="{{ $budgetTitle->name }}">
                                                        {{ $budgetTitle->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('budget_title')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('अपाङ्गताको प्रकार (गम्भीरता) को फिल्ड खाली छ |') }}
                                                </p>
                                            @enderror
                                        </div>

                                    </div> --}}
                                    {{-- <div class="col-4 my-2">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label for="" class="font-weight-light">योजना संचालन प्रक्रिया
                                                <span class="text-danger px-1 font-weight-bold">*</span> </label>
                                            <select name="implementPro"
                                                class="custom-select @error('implementPro') is-invalid @enderror">
                                                <option value="" selected>योजना संचालन प्रक्रिया *</option>
                                                @foreach ($implementPros as $implementPro)
                                                    <option value="{{ $implementPro->name }}">
                                                        {{ $implementPro->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('implementPro')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('अपाङ्गताको प्रकार (गम्भीरता) को फिल्ड खाली छ |') }}
                                                </p>
                                            @enderror
                                        </div>

                                    </div> --}}
                                    <div class="col-8" style="margin-top: 2.3rem; margin-bottom: 2.3rem;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('सम्झौता रकम') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="number" min="0" read placeholder="जम्मा"
                                                value="{{ old('contract_amount') }}" name="contract_amount"
                                                id="contract_amount"
                                                class="form-control  @error('contract_amount') is-invalid @enderror">
                                            @error('contract_amount')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="row" x-data="{ open1: false, open2: false, open3: false }">
                                        <div class="col-12 ">
                                            <!-- radio -->
                                            <div class="form-group clearfix mt-2">
                                                <label for=""
                                                    class="ml-2 pr-4 font-weight-light">{{ __('योजना संचालन प्रक्रिया') }}
                                                    <span class="text-danger px-1 font-weight-bold">*</span>
                                                    </span></label>
                                                <div class=" d-inline">
                                                    <input type="radio" value="1" name="implementPro" class="mx-3"
                                                        id="implementPro"
                                                        @click="{open1 = !open1 , open2 = false , open3 = false}">
                                                    <label for="implementPro" class="font-weight-light">
                                                        {{ __('उपभोक्ता समितिबाट') }}
                                                    </label>
                                                </div>
                                                <div class=" d-inline">
                                                    <input type="radio" value="2" name="implementPro" class="mx-3"
                                                        id="implementPro"
                                                        @click="{open2 = !open2 , open3 = false , open1 = false }">
                                                    <label for="implementPro" class="font-weight-light">
                                                        {{ __('ठेक्का प्रक्रियाबाट') }}
                                                    </label>
                                                </div>
                                                <div class=" d-inline">
                                                    <input type="radio" value="3" name="implementPro"
                                                        @click="{open3 = false, open2 = false , open1 = false }"
                                                        class="mx-3" id="implementPro1">
                                                    <label for="implementPro1" class="font-weight-light">
                                                        {{ __('अमानतबाट') }}
                                                    </label>
                                                </div>
                                                <div class=" d-inline">
                                                    <input type="radio" value="4"
                                                        @click="{open3 = !open3, open2 = false , open1 = false }"
                                                        name="implementPro" class="mx-3" id="implementPro1">
                                                    <label for="implementPro1" class="font-weight-light">
                                                        {{ __('गैर्‍हसरकारी संस्थाबाट') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 my-2" x-show="open2">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="col-6 my-2">
                                                        <label for="" class="font-weight-light">ठेक्का प्रक्रियाबाट
                                                            <span class="text-danger px-1 font-weight-bold">*</span>
                                                        </label>
                                                        <select name="contractProcess"
                                                            class="custom-select @error('contractProcess') is-invalid @enderror">
                                                            @foreach ($contractProcesses as $contractProcess)
                                                                <option value="{{ $contractProcess->id }}">
                                                                    {{ $contractProcess->name }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    @error('contractProcess')
                                                        <p class="invalid-feedback" style="font-size: 1.1rem">
                                                            {{ __('अपाङ्गताको प्रकार (गम्भीरता) को फिल्ड खाली छ |') }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-12 my-2" x-show="open3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="col-4 my-2">
                                                        <div class="input-group">
                                                            <input type="number" placeholder="महानगरपालिक" min="0"
                                                                value="{{ old('contract_amount_metropolitan_ngo') }}"
                                                                name="contract_amount_metropolitan_ngo"
                                                                id="contract_amount_metropolitan_ngo"
                                                                class="form-control  @error('contract_amount_metropolitan_ngo') is-invalid @enderror">
                                                            @error('contract_amount_metropolitan_ngo')
                                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                                </p>

                                                            @enderror
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <span class="text-danger px-1 py-3 font-weight-bold">+</span>
                                                    <div class="col-4 my-2">
                                                        <div class="input-group">
                                                            <input type="number" placeholder="जनसहभागिता" min="0"
                                                                value="{{ old('contract_amount_public_ngo') }}"
                                                                name="contract_amount_public_ngo"
                                                                id="contract_amount_public_ngo"
                                                                class="form-control  @error('contract_amount_public_ngo') is-invalid @enderror">
                                                            @error('contract_amount_public_ngo')
                                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                                </p>

                                                            @enderror
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-primary" id="cal">calculate</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-12 my-2" x-show="open1">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="col-4 my-2">
                                                        <div class="input-group">
                                                            <input type="number" placeholder="महानगरपालिक" min="0"
                                                                value="{{ old('contract_amount_metropolitan') }}"
                                                                name="contract_amount_metropolitan"
                                                                id="contract_amount_metropolitan_consumer"
                                                                class="form-control  @error('contract_amount_metropolitan') is-invalid @enderror">
                                                            @error('contract_amount_metropolitan')
                                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                                </p>

                                                            @enderror
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <span class="text-danger px-1 py-3 font-weight-bold">+</span>
                                                    <div class="col-4 my-2">
                                                        <div class="input-group">
                                                            <input type="number" placeholder="जनसहभागिता" min="0"
                                                                value="{{ old('contract_amount_public') }}"
                                                                name="contract_amount_public"
                                                                id="contract_amount_public_consumer"
                                                                class="form-control  @error('contract_amount_public') is-invalid @enderror">
                                                            @error('contract_amount_public')
                                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                                </p>

                                                            @enderror
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-primary" id="cal_consumer">calculate</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 my-3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title font-weight-bold"
                                                                style="margin-left: 45%">उपभोक्ता समितिको विवरण</h3>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <a id="add_consumer" class="btn btn-sm btn-primary">Add
                                                                more</a>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 10px">sn</th>
                                                                        <th>पद</th>
                                                                        <th>नाम</th>
                                                                        <th>ठेगाना</th>
                                                                        <th>लिङ्ग</th>
                                                                        <th>ना.प्र.मं/जिल्ला</th>
                                                                        <th>मोबाइल नं.</th>
                                                                        <th>एक्शन</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="re_consumer">
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">
                                                                            <select name="position_consumer[]" id=""
                                                                                class="form-control form-control-sm">
                                                                                @foreach ($positions as $position)
                                                                                    <option value="{{ $position->id }}">
                                                                                        {{ $position->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input type="text"
                                                                                value="{{ old('name_consumer') }}"
                                                                                name="name_consumer[]"
                                                                                class="form-control  @error('name_consumer') is-invalid @enderror">
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <select name="ward_no_consumer[]"
                                                                                class="custom-select @error('ward_no') is-invalid @enderror"
                                                                                name="ward_no">
                                                                                <option value="">
                                                                                    {{ __('--वार्ड छान्नुहोस्--') }}
                                                                                </option>
                                                                                @for ($i = 1; $i < 20; $i++)
                                                                                    <option value="{{ $i }}">
                                                                                        {{ Nepali($i) }}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <select name="gender_consumer[]"
                                                                                id="" class="form-control form-control-sm">
                                                                                <option value="M">पुरुष</option>
                                                                                <option value="F">महिला</option>
                                                                                <option value="O">अन्य</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input type="text"
                                                                                value="{{ old('citizenship_number_consumer') }}"
                                                                                name="citizenship_number_consumer[]"
                                                                                class="form-control  @error('citizenship_number_consumer') is-invalid @enderror">
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input type="text"
                                                                                value="{{ old('mobile_number_consumer') }}"
                                                                                name="mobile_number_consumer[]"
                                                                                class="form-control  @error('mobile_number_consumer') is-invalid @enderror">
                                                                        </td>

                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /.card -->
                                                    </div>
                                                </div>
                                                <div class="col-12 my-2">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title font-weight-bold"
                                                                style="margin-left: 45%">अनुगमन समितको विवरण</h3>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <a id="add_monitoring_committee"
                                                                class="btn btn-sm btn-primary">Add
                                                                more</a>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 10px">sn</th>
                                                                        <th>पद</th>
                                                                        <th>नाम</th>
                                                                        <th>ठेगाना</th>
                                                                        <th>लिङ्ग</th>
                                                                        <th>ना.प्र.मं/जिल्ला</th>
                                                                        <th>मोबाइल नं.</th>
                                                                        <th>एक्शन</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="re_monitoring_committee">
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">
                                                                            <select name="position_monitoring_committee[]"
                                                                                id="" class="form-control form-control-sm">
                                                                                <option value="संयोजक">संयोजक</option>
                                                                                <option value="सदस्य">सदस्य</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input type="text"
                                                                                value="{{ old('name_monitoring_committee') }}"
                                                                                name="name_monitoring_committee[]"
                                                                                class="form-control  @error('monitoring_committee') is-invalid @enderror">
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <select name="ward_no_monitoring_committee"
                                                                                class="custom-select @error('ward_no_monitoring_committee') is-invalid @enderror"
                                                                                name="ward_no_monitoring_committee[]">
                                                                                <option value="">
                                                                                    {{ __('--वार्ड छान्नुहोस्--') }}
                                                                                </option>
                                                                                @for ($i = 1; $i < 20; $i++)
                                                                                    <option value="{{ $i }}">
                                                                                        {{ Nepali($i) }}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <select name="gender_monitoring_committee[]"
                                                                                id="" class="form-control form-control-sm">
                                                                                <option value="M">पुरुस</option>
                                                                                <option value="F">महिला</option>
                                                                                <option value="O">अन्य</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input type="text"
                                                                                value="{{ old('citizenship_number_monitoring_committee') }}"
                                                                                name="citizenship_number_monitoring_committee[]"
                                                                                class="form-control  @error('citizenship_number_monitoring_committee') is-invalid @enderror">
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input type="text"
                                                                                value="{{ old('mobile_number_monitoring_committee') }}"
                                                                                name="mobile_number_monitoring_committee[]"
                                                                                class="form-control  @error('mobile_number_monitoring_committee') is-invalid @enderror">
                                                                        </td>

                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /.card -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                    </div>
                                    {{-- end of third row --}}
                                    {{-- start of fourth row --}}

                                </div>
                                <div class="row">
                                    <div class="col-2 my-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('सम्झौता मिति') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="text" id="agreement_date" readonly
                                                value="{{ old('agreement_date') }}" name="agreement_date"
                                                class="form-control  @error('agreement_date') is-invalid @enderror">
                                            @error('agreement_date')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    {{-- end of fourth row --}}
                                    {{-- start of fifth row --}}
                                    <div class="col-2 my-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('सम्झौता अवधि') }} <span
                                                        class="text-danger px-1 font-weight-bold">*</span>
                                                </span>
                                            </div>
                                            <input type="text" id="agreement_period" readonly
                                                value="{{ old('agreement_period') }}" name="agreement_period"
                                                class="form-control  @error('agreement_period') is-invalid @enderror">
                                            @error('agreement_period')
                                                <p class="invalid-feedback" style="font-size: 1.1rem">
                                                    {{ __('नाम फिल्ड खाली छ |') }}
                                                </p>

                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    {{-- <div class="col-2 my-2">
                                        <div class="form-group">
                                            <label>भौतिक विवरण</label>
                                            <select class="physical_particular" name="physical_particular[]"
                                                multiple="multiple" style="width: 100%;">

                                                @foreach ($physicalParticulars as $physicalParticular)
                                                    <option value="{{ $physicalParticular->name }}">
                                                        {{ $physicalParticular->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="col-12 my-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Bordered Table</h3>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <a id="add" class="btn btn-sm btn-primary">Add more</a>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">sn</th>
                                                            <th>विवरण</th>
                                                            <th>परिमाण</th>
                                                            <th>भौतिक इकाई</th>
                                                            <th>3</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="re">
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">
                                                                <select name="physical_particular[]" id=""
                                                                    class="form-control form-control-sm">
                                                                    @foreach ($physicalParticulars as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="number" class="form-control form-control-sm"
                                                                    name="physical_traget[]">
                                                            </td>
                                                            </td>
                                                            <td class="text-center">
                                                                <select name="units[]" id=""
                                                                    class="form-control form-control-sm">
                                                                    @foreach ($units as $unit)
                                                                        <option value="{{ $unit->id }}">
                                                                            {{ $unit->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                {{-- end of fifth row --}}
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-sm btn-primary">{{ __('पेश गर्नुहोस्') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#cal").on("click", function() {
                var c = Number($("#contract_amount_metropolitan_ngo").val()) + Number($(
                    "#contract_amount_public_ngo").val());
                $("#contract_amount").val(c);
            })
            $("#cal_consumer").on("click", function() {
                var c = Number($("#contract_amount_metropolitan_consumer").val()) + Number($(
                    "#contract_amount_public_consumer").val());
                $("#contract_amount").val(c);
            })
            $('.physical_particular').select2();
            let j = 2;


            $("#add").on("click", function() {
                var html = '<tr id="remo' + j + '">' +
                    '<td class="text-center">' + j + '</td>' +
                    '<td class="text-center">' +
                    '<select name="physical_particular[]" id=""' +
                    'class="form-control form-control-sm">' +
                    '@foreach ($physicalParticulars as $item)'
                        +'<option value="{{ $item->id }}">'
                            +'{{ $item->name }}</option>'
                        +'@endforeach' +
                    '</select>' +
                    '</td>' +
                    '<td class="text-center">' +
                    '<input type="text" class="form-control form-control-sm"' +
                    'name="physical_traget[]">' +
                    '</td>' +
                    '</td>' +
                    '<td class="text-center">' +
                    '<select name="units[]" id=""' +
                    'class="form-control form-control-sm">' +
                    '@foreach ($units as $unit)'
                        +'<option value="{{ $unit->id }}">'
                            +'{{ $unit->name }}</option>'
                        +'@endforeach' +
                    ' </select>' +
                    '</td>' +
                    '<td><i class="fas fa-trash-alt text-danger fa-2x delete" onclick="remove(' + j +
                    ')"></i></td>' +
                    '</tr>';
                j++;

                $("#re").append(html);
            });
            let k = 2;
            $("#add_consumer").on("click", function() {
                var html_consumer = '<tr id="remo' + k + '">' +
                    '<td class="text-center">' + k + '</td>' +
                    '<td class="text-center">' +
                    '<select name="position_consumer[]" id=""' +
                    'class="form-control form-control-sm">' +
                    '@foreach ($positions as $item)'
                        +'<option value="{{ $item->id }}">'
                            +'{{ $item->name }}</option>'
                        +'@endforeach' +
                    '</select>' +
                    '</td>' +
                    '<td class="text-center">' +
                    '<input type="text" class="form-control form-control-sm"' +
                    'name="name_consumer[]">' +
                    '</td>' +
                    '</td>' +
                    '<td class="text-center">' +
                    '<select name="ward_no"' +
                    'class="custom-select @error('ward_no') is-invalid @enderror" name="ward_no">' +
                    '<option value="">{{ __('--वार्ड छान्नुहोस्--') }}</option>' +
                    '@for ($i = 1; $i < 20; $i++)'+
                        '<option value="{{ $i }}">{{ Nepali($i) }}</option>'+
                        '@endfor' +
                    '</select>' +
                    '</td>' +
                    '<td class="text-center">'+
                    '<select name="gender_consumer[]"'+
                    'id="" class="form-control form-control-sm">'+
                    '<option value="M">पुरुष</option>'+
                    '<option value="F">महिला</option>'+
                    '<option value="O">अन्य</option>'+
                    '</select>'+
                    '</td>'+
                    '<td class="text-center">'+
                    '<input type="text"'+
                    'value="{{ old('citizenship_number_consumer') }}"'+
                    'name="citizenship_number_consumer"'+
                    'class="form-control  @error('citizenship_number_consumer') is-invalid @enderror">'+
                    '</td>'+
                    '<td class="text-center">'+
                    '<input type="text"'+
                    'value="{{ old('mobile_number_consumer') }}"'+
                    'name="mobile_number_consumer"'+
                    'class="form-control  @error('mobile_number_consumer') is-invalid @enderror">'+
                    '</td>'+
                    '<td><i class="fas fa-trash-alt text-danger fa-2x delete" onclick="remove(' + k +
                    ')"></i></td>' +
                    '</tr>';
                k++;

                $("#re_consumer").append(html_consumer);
            });
            let l = 2;
            $("#add_monitoring_committee").on("click", function() {
                var html_monitor = '<tr id="remo' + l + '">' +
                    '<td class="text-center">' + l + '</td>' +
                    '<td class="text-center">' +
                    '<select name="position_monitoring_committee[]"' +
                    'id="" class="form-control form-control-sm">' +
                    '<option value="संयोजक">संयोजक</option>' +
                    '<option value="सदस्य">सदस्य</option>' +
                    '</select>' +
                    '</td>' +
                    '<td class="text-center">' +
                    '<input type="text" class="form-control form-control-sm"' +
                    'name="name_monitoring_committee[]">' +
                    '</td>' +
                    '</td>' +
                    '<td class="text-center">' +
                    '<select name="ward_no_monitoring_committee"' +
                    'class="custom-select @error('ward_no') is-invalid @enderror" name="ward_no">' +
                    '<option value="">{{ __('--वार्ड छान्नुहोस्--') }}</option>' +
                    '@for ($i = 1; $i < 20; $i++)'+
                        '<option value="{{ $i }}">{{ Nepali($i) }}</option>'+
                        '@endfor' +
                    '</select>' +
                    '</td>' +
                    '<td class="text-center">' +
                    '<select name="gender_monitoring_committee[]"' +
                    'id="" class="form-control form-control-sm">' +
                    '<option value="M">पुरुस</option>' +
                    '<option value="F">महिला</option>' +
                    '<option value="O">अन्य</option>' +
                    '</select>' +
                    '</td>' +
                    '<td class="text-center">'+
                    '<input type="text"'+
                    'value="{{ old('citizenship_number_monitoring_committee') }}"'+
                    'name="citizenship_number_monitoring_committee"'+
                    'class="form-control  @error('citizenship_number_monitoring_committee') is-invalid @enderror">'+
                    '</td>'+
                    '<td class="text-center">'+
                    '<input type="text"'+
                    'value="{{ old('mobile_number_monitoring_committee') }}"'+
                    'name="mobile_number_monitoring_committee"'+
                    'class="form-control  @error('mobile_number_monitoring_committee') is-invalid @enderror">'+
                    '</td>'+
                    '<td><i class="fas fa-trash-alt text-danger fa-2x delete" onclick="remove(' + l +
                    ')"></i></td>' +
                    '</tr>';
                l++;

                $("#re_monitoring_committee").append(html_monitor);
            });
        });

        function remove(param) {
            $("#remo" + param).html("");
        }


        $(document).ready(function() {
            $("#agreement_date").nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 5
            });
            $("#agreement_period").nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 5
            });
        });
    </script>

@endsection
