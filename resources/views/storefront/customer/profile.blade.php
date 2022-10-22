@php
    // $profile=asset(Storage::url('uploads/profile/'));
    $profile=\App\Models\Utility::get_file('uploads/customerprofile/');
    //$default_avatar = asset(Storage::url('uploads/default_avatar/avatar.png'));
@endphp
<div class="modal-body">
    {{Form::model($userDetail,array('route' => array('customer.profile.update',$slug,$userDetail), 'method' => 'put', 'enctype' => "multipart/form-data"))}}
    {{-- @dd($userDetail->avatar) --}}
    <div class="container-lg px-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="main-informations">
                    <h3 class="profile-heading mb-5">
                        {{__('Main Information')}}
                    </h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                {{Form::text('name',null,array('class'=>'form-control font-style'))}}
                                @error('name')
                                <span class="invalid-name" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="name">{{__('Email')}}</label>
                                {{Form::text('email',null,array('class'=>'form-control','placeholder'=>__('Enter User Email')))}}
                                @error('email')
                                <span class="invalid-email" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="name">{{__('Avatar')}}</label>
                            <div class="row">
                                <div class="small-12 large-4 columns">
                                    <div class="imageWrapper bg--gray">
                                        <button class="file-upload bg--gray">
                                            <img src="{{asset('custom/img/upload.svg')}}" alt="upload" class="img-fluid">
                                            {{-- <img src="{{ !empty($users->avatar) ? $profile . '/' . $users->avatar : $profile . '/avatar.png' }}" id="blah" width="25%"/> --}}
                                            <input type="file" name="profile" id="file-1" class="file-input">{{__('Choose file here')}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <div class="container-lg px-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="main-informations">
                    <h3 class="profile-heading mb-5">
                        {{__('Password Informations')}}
                    </h3>
                    <div class="row profile-select-dropdown">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="current_password">{{__('Current Password')}}</label>
                                {{Form::password('current_password',array('class'=>'form-control','placeholder'=>__('Enter Current Password')))}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="new_password">{{__('New Password')}}</label>
                                {{Form::password('new_password',array('class'=>'form-control','placeholder'=>__('Enter New Password')))}}
                                @error('new_password')
                                <span class="invalid-new_password" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="confirm_password">{{__('Re-type New Password')}}</label>
                                {{Form::password('confirm_password',array('class'=>'form-control','placeholder'=>__('Enter Re-type New Password')))}}
                                @error('confirm_password')
                                <span class="invalid-confirm_password" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-right">
                <div class="form-group">
                    {{Form::button(__('Save Changes'),array('type'=>'submit','class'=>'btn text-white ml-1  float-right ml-2 bg--gray hover-translate-y-n3 icon-font'))}}
                </div>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>
    
