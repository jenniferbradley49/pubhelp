@extends('layouts.master_admin')

@section('title', 'Edit client')
@section('page_specific_jquery')
<script>
$( document ).ready(function() {
// $('#delivery_email').click()   
});
</script>
@endsection

@section('content')

<!-- resources/views/admin/edit_client.blade.php -->
	
        <div class="row">
        	{{ Form::open(array('class' => "form-horizontal")) }}
        	{{ Form::hidden('client_user_id', $data['client_user_id']) }}
        	
			<div class="col-sm-2"></div>
			<div class="col-sm-8"> 
				@if (count($errors) > 0)
        			<ul>
            			@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            			@endforeach
       			 	</ul>
   				@endif
    		</div>
			<div class="col-sm-2"> </div>
		</div><!-- end row -->
        
      
<div class="row">
<div class="col-sm-1"> <br><br><br></div>
<div class="col-sm-3"> 
   {{ Form::label('int_survey_project_id', 'Choose the project to which this client should be assigned') }}            
    </div>
<div class="col-sm-5">
   {{ Form::select('int_survey_project_id', $data['arr_projects']) }}
</div>
    <div class="col-sm-2"><span id="status"></span></div>
<div class="col-sm-1"> </div>
</div><!-- end row -->
  
  
        
        <div class="row">  
        	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_email_two">backup email - optional</label>
            </div>
            <div class="col-lg-6">
                {{ Form::email('str_email_two', $data['input_old']['str_email_two'], array('class' => "form-control", 'id' => 'str_email_two', 'placeholder' => 'additional email')) }}                    
				<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
                  
                 
        <div class="row">  
        	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_website">Client URL - start with http(s):// - required</label>
            </div>
            <div class="col-lg-6">
                 {{ Form::text('str_website', $data['input_old']['str_website'], array('class' => "form-control", 'id' => 'str_website', 'placeholder' => 'client website URL')) }}                    
				<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
  <!--            
        <div class="row">  
        	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_crm">Lead delivery options</label>
            </div>
            <div class="col-lg-6">
            <!-- temp comment, 1 for delivery by crm, 0 for delivery by email -->
 <!--                    
                      <br /><br /><br />
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->


<!-- begin delivery radio group -->
<div class="row">		
	<div class="col-lg-1">&nbsp;</div>

	<div class="col-lg-6">How should we deliver the lead?</div>
				
				
	<div class="col-lg-5">&nbsp;</div>
</div><!-- end row, level 2 -->

<div class="row">		
	<div class="col-lg-3">&nbsp;
	</div>

	<div class="col-lg-2">{{ Form::label('bool_delivery_crm', 'Email') }}
	</div>
				
	<div class="col-lg-1">{{ Form::radio('bool_delivery_crm', '0',
           				($data['input_old']['bool_delivery_crm'] == 1 ? true : false),
           				 ['id' => 'delivery_crm']) }}&nbsp;
    </div>
	<div class="col-lg-6">&nbsp;
	</div>
           				 
</div><!-- end row, level 2 -->

<div class="row">		
	<div class="col-lg-3">&nbsp;<br /><br /></div>

	<div class="col-lg-2">{{ Form::label('bool_delivery_crm', 'Your chosen CRM') }}</div>
				
	<div class="col-lg-1">{{ Form::radio('bool_delivery_crm', '0',
           				($data['input_old']['bool_delivery_crm'] == 1 ? true : false),
           				 ['id' => 'delivery_crm']) }}&nbsp;</div>
				
	<div class="col-lg-6">&nbsp;</div>
</div><!-- end row, level 2 -->

<!-- end choose delivery radio group -->
    		
        <div class="row">  
        	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_email_delivery">Email to which the lead should be sent</label>
            </div>
            <div class="col-lg-6">
                {{ Form::email('str_email_delivery', $data['input_old']['str_email_delivery'], 
                array('class' => "form-control", 'id' => 'str_email_delivery', 
                'placeholder' => 'email - lead delivery')) }}                    
				<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->

  		
  		
        <div class="row">  
        	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_crm">CRM provider - optional</label>
            </div>
            <div class="col-lg-6">
                       {{ Form::text('str_crm', $data['input_old']['str_crm'], 
                       array('class' => "form-control", 'id' => 'str_crm', 
                       'placeholder' => 'CRM provider')) }}                    
				<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
						                     
        <div class="row">  
        	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_crm_website"> CRM provider URL - start with http(s):// - optional*</label>
            </div>
            <div class="col-lg-6">
       		
                       {{ Form::text('str_crm_url', $data['input_old']['str_crm_url'], 
                       array('class' => "form-control", 'id' => 'str_crm_url', 
                       'placeholder' => 'CRM provider website URL')) }}                    
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
						                                 
                    
        <div class="row">  
        	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_lead_destination">URL for web lead integration - start with http(s):// - optional</label>
            </div>
            <div class="col-lg-6">
                       {{ Form::text('str_lead_destination', $data['input_old']['str_lead_destination'], array('class' => "form-control", 'id' => 'str_lead_destination', 'placeholder' => 'URL for web lead integration')) }}                    
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
                   
  		
                     
        <div class="row">  
         	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_first_name">first name - required</label>
            </div>
            <div class="col-lg-6">
                       {{ Form::text('str_first_name', $data['input_old']['str_first_name'], 
                       array('class' => "form-control", 'id' => 'str_first_name', 
                       'placeholder' => 'first name')) }}                    
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
                  
        <div class="row">  
         	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_last_name">last name - required</label>
            </div>
            <div class="col-lg-6">
                       {{ Form::text('str_last_name', $data['input_old']['str_last_name'], 
                       array('class' => "form-control", 'id' => 'str_last_name', 
                       'placeholder' => 'last name')) }}               
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
                  
  			                  
        <div class="row">  
         	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_telephone">telephone - required</label>
            </div>
            <div class="col-lg-6">
                       {{ Form::text('str_telephone', $data['input_old']['str_telephone'], array('class' => "form-control", 'id' => 'str_telephone', 'placeholder' => 'telephone')) }}                    
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
						                  
						                  
  <!--  		
        <div class="row">  
         	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_telephone_two">telephone 2 - optional</label>
            </div>
            <div class="col-lg-6">
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
-->						                                   
   <!--                
                  <div class="form-group">
                    <label for="telephone" class="col-lg-2 control-label">Telephone - optional</label>
                    <div class="col-lg-10">
						<br>
                    </div>
                  </div>
 -->                                
                     
        <div class="row">  
         	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_company">Company - optional</label>
            </div>
            <div class="col-lg-6">
                       {{ Form::text('str_company', $data['input_old']['str_company'], array('class' => "form-control", 'id' => 'str_company', 'placeholder' => 'company')) }}                    
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
						                  
                                 
                         
        <div class="row">  
         	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_city">City</label>
            </div>
            <div class="col-lg-6">
                       {{ Form::text('str_city', $data['input_old']['str_city'], array('class' => "form-control", 'id' => 'str_city', 'placeholder' => 'city')) }}                    
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
						                  
                                 
                     
        <div class="row">  
         	<div class="col-lg-1">&nbsp;
            </div>
       		<div class="col-lg-4">
              	<label for="str_zip">zip - optional</label>
            </div>
            <div class="col-lg-6">
                      {{ Form::text('str_zip', $data['input_old']['str_zip'], array('class' => "form-control", 'id' => 'str_zip', 'placeholder' => 'zip code')) }}                    
						<br>
            </div>
            <div class="col-lg-1">&nbsp;
            </div>
  		</div> <!-- end row -->
						                
                  

<!-- start state -->			
			<div class="row">		
				<div class="col-lg-1">&nbsp;</div>
				<div class="col-lg-4">{{ Form::label('int_state_id', 'State') }}
				<br><br>
				</div>
				<div class="col-lg-6">{{ Form::select('int_state_id', $data['arr_states'], 
				$data['input_old']['int_state_id'] )
				 }}</div>
				
				<div class="col-lg-1">&nbsp;</div>
			</div><!-- end row, level 2 -->
<!-- end state -->

<!-- begin active radio group -->
<div class="row">		
	<div class="col-lg-1">&nbsp;</div>

	<div class="col-lg-6">Is the client active?</div>
				
				
	<div class="col-lg-5">&nbsp;</div>
</div><!-- end row, level 2 -->

<div class="row">		
	<div class="col-lg-1">&nbsp;</div>

	<div class="col-lg-5">{{ Form::label('bool_active', 'Yes') }}</div>
				
	<div class="col-lg-1">{{ Form::radio('bool_active', '1', true) }}</div>
				
	<div class="col-lg-5">&nbsp;</div>
</div><!-- end row, level 2 -->

<div class="row">		
	<div class="col-lg-1">&nbsp;</div>

	<div class="col-lg-5">{{ Form::label('bool_active', 'No') }}</div>
				
	<div class="col-lg-1">{{ Form::radio('bool_active', '0', false) }}</div>
				
	<div class="col-lg-5">&nbsp;</div>
</div><!-- end row, level 2 -->

<!-- end choose active radio group -->


<!-- begin confirmed radio group -->
<div class="row">		
	<div class="col-lg-1">&nbsp;</div>

	<div class="col-lg-6">Is this client confirmed - verified client website, verified web lead URL, and tried?</div>
				
				
	<div class="col-lg-5">&nbsp;</div>
</div><!-- end row, level 2 -->

<div class="row">		
	<div class="col-lg-1">&nbsp;</div>

	<div class="col-lg-5">{{ Form::label('bool_confirmed', 'Yes') }}</div>
				
	<div class="col-lg-1">{{ Form::radio('bool_confirmed', '1', false) }}</div>
				
	<div class="col-lg-5">&nbsp;</div>
</div><!-- end row, level 2 -->

<div class="row">		
	<div class="col-lg-1">&nbsp;</div>

	<div class="col-lg-5">{{ Form::label('bool_confirmed', 'No') }}</div>
				
	<div class="col-lg-1">{{ Form::radio('bool_confirmed', '0', true) }}</div>
				
	<div class="col-lg-5">&nbsp;</div>
</div><!-- end row, level 2 -->

<!-- end choose active radio group -->



<!-- start submit -->			
			<div class="row">		
				<div class="col-lg-1">&nbsp;</div>
				<div class="col-lg-3"><button type="reset" class="btn btn-default">Cancel</button>&nbsp;
				
				</div>
				<div class="col-lg-7"> <button type="submit" class="btn btn-primary">Add client</button></div>
				<div class="col-lg-1">&nbsp;{{ Form::close() }}
				</div>
			</div><!-- end row, level 2 -->
<!-- end submit -->
			
              
 <!--                     
                  <div class="form-group">
                    <label for="recaptcha" class="col-lg-2 control-label">Captcha required</label>
                    <div class="col-lg-10">
						<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>                    </div>
						
					</div>
-->                                               
<!--            </div>
          </div>                 
        </div>
-->
        <div class="row">
          <div class="col-lg-12">
            
            * just enough info to enable identification
          </div>
        </div>
@endsection	