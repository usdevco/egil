{!! Form::open(array('url'=>'subcoordinator', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
@if(Session::has('messagetext'))
{!! Session::get('messagetext') !!}
@endif
<ul class="parsley-error-list">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
<div class="col-md-12">
    <fieldset>
        <legend> SubCoordinator</legend>
        <div class="form-group  " >
            <label for="Id" class=" control-label col-md-4 text-left"> Id <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='id' id='id' value='{{ $row['id'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Group Id" class=" control-label col-md-4 text-left"> Group Id <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='group_id' id='group_id' value='{{ $row['group_id'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Username" class=" control-label col-md-4 text-left"> Username <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='username' id='username' value='{{ $row['username'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Password" class=" control-label col-md-4 text-left"> Password <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='password' id='password' value='{{ $row['password'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Phone Number" class=" control-label col-md-4 text-left"> Phone Number <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='phone_number' id='phone_number' value='{{ $row['phone_number'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="First Name" class=" control-label col-md-4 text-left"> First Name <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='first_name' id='first_name' value='{{ $row['first_name'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Last Name" class=" control-label col-md-4 text-left"> Last Name <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='last_name' id='last_name' value='{{ $row['last_name'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Avatar" class=" control-label col-md-4 text-left"> Avatar <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='avatar' id='avatar' value='{{ $row['avatar'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Active" class=" control-label col-md-4 text-left"> Active <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='active' id='active' value='{{ $row['active'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Login Attempt" class=" control-label col-md-4 text-left"> Login Attempt <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='login_attempt' id='login_attempt' value='{{ $row['login_attempt'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Last Login" class=" control-label col-md-4 text-left"> Last Login <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <div class="input-group m-b" style="width:150px !important;">
                    {!! Form::text('last_login', $row['last_login'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Created At" class=" control-label col-md-4 text-left"> Created At <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <div class="input-group m-b" style="width:150px !important;">
                    {!! Form::text('created_at', $row['created_at'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Updated At" class=" control-label col-md-4 text-left"> Updated At <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <div class="input-group m-b" style="width:150px !important;">
                    {!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Reminder" class=" control-label col-md-4 text-left"> Reminder <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='reminder' id='reminder' value='{{ $row['reminder'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Activation" class=" control-label col-md-4 text-left"> Activation <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='activation' id='activation' value='{{ $row['activation'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Remember Token" class=" control-label col-md-4 text-left"> Remember Token <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='remember_token' id='remember_token' value='{{ $row['remember_token'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Last Activity" class=" control-label col-md-4 text-left"> Last Activity <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='last_activity' id='last_activity' value='{{ $row['last_activity'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Config" class=" control-label col-md-4 text-left"> Config <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <textarea name='config' rows='5' id='config' class='form-control input-sm '  
                    >{{ $row['config'] }}</textarea> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Hotel Id" class=" control-label col-md-4 text-left"> Hotel Id <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='hotel_id' id='hotel_id' value='{{ $row['hotel_id'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="User Type" class=" control-label col-md-4 text-left"> User Type <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='user_type' id='user_type' value='{{ $row['user_type'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Hotel Type" class=" control-label col-md-4 text-left"> Hotel Type <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='hotel_type' id='hotel_type' value='{{ $row['hotel_type'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Hotel Code" class=" control-label col-md-4 text-left"> Hotel Code <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='hotel_code' id='hotel_code' value='{{ $row['hotel_code'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Hotel Address" class=" control-label col-md-4 text-left"> Hotel Address <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='hotel_address' id='hotel_address' value='{{ $row['hotel_address'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Service Type" class=" control-label col-md-4 text-left"> Service Type <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='service_type' id='service_type' value='{{ $row['service_type'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="O Name" class=" control-label col-md-4 text-left"> O Name <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='o_name' id='o_name' value='{{ $row['o_name'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Vcode" class=" control-label col-md-4 text-left"> Vcode <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='vcode' id='vcode' value='{{ $row['vcode'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Address" class=" control-label col-md-4 text-left"> Address <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='address' id='address' value='{{ $row['address'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="State" class=" control-label col-md-4 text-left"> State <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='state' id='state' value='{{ $row['state'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="City" class=" control-label col-md-4 text-left"> City <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='city' id='city' value='{{ $row['city'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="form-group  " >
            <label for="Zip" class=" control-label col-md-4 text-left"> Zip <span class="asterix"> * </span></label>
            <div class="col-md-6">
                <input  type='text' name='zip' id='zip' value='{{ $row['zip'] }}' 
                class='form-control input-sm ' /> 
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </fieldset>
</div>
<div style="clear:both"></div>
<div class="form-group">
    <label class="col-sm-4 text-right">&nbsp;</label>
    <div class="col-sm-8">	
        <button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
        <button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
    </div>
</div>
<input type="hidden" name="action_task" value="public" />
{!! Form::close() !!}
<script type="text/javascript">
    $(document).ready(function() { 
    	
    	 
    
    	$('.removeCurrentFiles').on('click',function(){
    		var removeUrl = $(this).attr('href');
    		$.get(removeUrl,function(response){});
    		$(this).parent('div').empty();	
    		return false;
    	});		
    	
    });
</script>