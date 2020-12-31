@extends('admin.layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <span id="form_result"></span>
    <div class="row">        
        
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold text-primary">SMTP Settings</h3>
                </div>
                <div class="table-responsive p-3">
                    <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_DRIVER">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL DRIVER')}}</label>                       
                                <input type="text" class="form-control" name="MAIL_DRIVER" value="{{  env('MAIL_DRIVER') }}" placeholder="MAIL DRIVER" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_HOST">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL HOST')}}</label>
                                <input type="text" class="form-control" name="MAIL_HOST" value="{{  env('MAIL_HOST') }}" placeholder="MAIL HOST" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_PORT">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL PORT')}}</label>
                                <input type="text" class="form-control" name="MAIL_PORT" value="{{  env('MAIL_PORT') }}" placeholder="MAIL PORT" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_USERNAME">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL USERNAME')}}</label>
                                <input type="text" class="form-control" name="MAIL_USERNAME" value="{{  env('MAIL_USERNAME') }}" placeholder="MAIL USERNAME" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_PASSWORD">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL PASSWORD')}}</label>
                                <input type="text" class="form-control" name="MAIL_PASSWORD" value="{{  env('MAIL_PASSWORD') }}" placeholder="MAIL PASSWORD" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_ENCRYPTION">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL ENCRYPTION')}}</label>
                                <input type="text" class="form-control" name="MAIL_ENCRYPTION" value="{{  env('MAIL_ENCRYPTION') }}" placeholder="MAIL ENCRYPTION" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_FROM_ADDRESS">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL FROM ADDRESS')}}</label>
                                <input type="text" class="form-control" name="MAIL_FROM_ADDRESS" value="{{  env('MAIL_FROM_ADDRESS') }}" placeholder="MAIL FROM ADDRESS" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="types[]" value="MAIL_FROM_NAME">
                            <div class="col-lg-6">
                                <label class="control-label">{{__('MAIL FROM NAME')}}</label>
                                <input type="text" class="form-control" name="MAIL_FROM_NAME" value="{{  env('MAIL_FROM_NAME') }}" placeholder="MAIL FROM NAME" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit">{{__('Save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold text-primary">Instruction</h3>
                </div>
                <div class="table-responsive p-3">
                    <p style="color:red"><b>
                        Please be carefull when you are configuring SMTP for incorrect <br>
                        configuration you will get error at the time of order place new registration <br>
                        sending newsletter.</b>
                    </p>
                    <h6><b>For Non-SSL</b></h6>  <hr>
                        <p>
                            Select 'sendmail' for Mail Driver if you face any issue after <br>
                            configuring 'smtp' as Mail Driver
                        </p>
                        <p>
                            Set Mail Host according to your server Mail Client Manual Settings  
                        </p>
                        <p>
                            Set Mail port as '587'
                        </p>
                        <p>
                            Set Mail Encryption as 'ssl' if you face issue with 'tls'
                        </p>
                    <h6><b>For SSl</b></h6>  <hr>
                        <p>
                            Select 'sendmail' for Mail Driver if you face any issue after <br>
                            configuring 'smtp' as Mail Driver
                        </p>
                        <p>
                            Set Mail Host according to your server Mail Client Manual Settings  
                        </p>
                        <p>
                            Set Mail port as '465'
                        </p>
                        <p>
                            Set Mail Encryption as 'ssl'
                        </p>
                </div>
            </div>
        </div>
        


    </div>  
</div>
@endsection
