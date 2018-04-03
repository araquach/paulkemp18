{!! Form::open(array(
	'action' => 'ApprenticeController@store', 'id' => 'apprentice-form'
)) !!}

<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>

@if (count($errors) > 0)

<div id="stylist-form_es_" class="errorSummary">
		<p>Please fix the following input errors:</p>
		<ul>
	   		 @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    	@endforeach
		</ul>
</div>
   
@endif
	
<div class="accordion">
	
	<h2 class="reveal">1. Contact Information</h2>
	
	<div class="elements">

		{!! Form::hidden('id') !!}
		
		{!! Form::hidden('salon_id', '2') !!}

	<div class="row">
		{!! Form::label('first_name', 'First Name') !!}
		{!! Form::text('first_name', old('first_name')) !!}
		{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('second_name', 'Second Name') !!}
		{!! Form::text('second_name', old('second_name')) !!}
		{!! $errors->first('second_name', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('age', 'Age') !!}
		{!! Form::text('age', old('age')) !!}
		{!! $errors->first('age', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('address1', 'Address 1') !!}
		{!! Form::text('address1', old('address1')) !!}
		{!! $errors->first('address1', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('address2', 'Address 2') !!}
		{!! Form::text('address2', old('address2')) !!}
		{!! $errors->first('address2', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('town', 'Town/City') !!}
		{!! Form::text('town', old('town')) !!}
		{!! $errors->first('town', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('postcode', 'Postcode') !!}
		{!! Form::text('postcode', old('postcode')) !!}
		{!! $errors->first('postcode', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('email', 'Email Address') !!}
		{!! Form::text('email', old('email')) !!}
		{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('phone', 'Phone Number') !!}
		{!! Form::text('phone', old('phone')) !!}
		{!! $errors->first('phone', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('mobile', 'Mobile Number') !!}
		{!! Form::text('mobile', old('mobile')) !!}
		{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
	</div>
	
		</div> <!--end elements (basic info)-->
	
	<h2 class="reveal">2. Experience</h2>
	<div class="elements">
		
	<div class="row">
		{!! Form::label('current_emp', 'Are you currently in employment?') !!}
		{!! Form::select('current_emp', array(
			'1st year apprentice' => '1st Year Apprentice',
			'2nd year apprentice' => '2nd Year Apprentice',
			'L1 College' => 'Level 1 College',
			'L2 College' => 'Level 2 College',
			'School Link' => 'School Link',
			'Other' => 'Other'
			), old('current_emp'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('current_emp', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('in_salon', 'Currentin_salon Position') !!}
		{!! Form::select('in_salon', array(
			'In salon' => 'In Salon',
			'Other industry' => 'Other Industry',
			'Unemployed' => 'Not employed'
			), old('in_salon'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('in_salon', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('salon_name', 'Please state your current workplace (if applicable)') !!}
		{!! Form::text('salon_name', old('salon_name')) !!}
		{!! $errors->first('salon_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qualification_school', 'What qualification did you achieve at school?') !!}
		{!! Form::select('qualification_school', array(
			'Up to 4 GCSE' => 'Up to 4 GCSE\'s',
			'4 or more GCSE' => '4 or more GCSE\'s',
			'1 or more A level' => '1 or more A level\'s'
			), old('qualification_school'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('qualification_school', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qualification_hair', 'Are you currently doing any hairdressing qualifications?') !!}
		{!! Form::select('qualification_hair', array(
			'Towards NVQ1' => 'Working towards NVQ level 1',
			'Towards NVQ2' => 'Working towards NVQ level 2',
			'Towards NVQ3' => 'Working towards NVQ level 3',
			'Other' => 'Other'
			), old('qualification_hair'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('qualification_hair', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	</div> <!--end elements (experience)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate your main interests from 1 (least) to 5 (most) for the following:</p>

	<div class="row">
		{!! Form::label('cutting', 'Cutting Hair') !!}
		{!! Form::selectRange('cutting', 1, 5, old('cutting'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('cutting', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('styling', 'Styling Hair') !!}
		{!! Form::selectRange('styling', 1, 5, old('styling'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('styling', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('colouring', 'Colouring Hair') !!}
		{!! Form::SelectRange('colouring', 1, 5, old('colouring'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('colouring', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('men', 'Men\'s Hairdressing') !!}
		{!! Form::SelectRange('men', 1, 5, old('men'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('men', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions', 'Extensions') !!}
		{!! Form::SelectRange('extensions', 1, 5, old('extensions'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('extensions', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('chem_straightening', 'Chemical Straightening') !!}
		{!! Form::SelectRange('chem_straightening', 1, 5, old('chem_straightening'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('chem_straightening', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('brazil_blow', 'Brazilian Blowdry\'s') !!}
		{!! Form::SelectRange('brazil_blow', 1, 5, old('brazil_blow'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('brazil_blow', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('hair_up', 'Hair Up Styling') !!}
		{!! Form::SelectRange('hair_up', 1, 5, old('hair_up'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('hair_up', '<div class="errorMessage">:message</div>') !!}
	</div>
	</div> <!--end elements (hairdressing skills)-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	
	<div class="row">
		{!! Form::label('about', 'Tell us a bit about yourself') !!}
		{!! Form::textarea('about', old('about')) !!}
		{!! $errors->first('about', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('why_hairdressing', 'Why did you choose hairdressing as a career?') !!}
		{!! Form::textarea('why_hairdressing', old('why_hairdressing')) !!}
		{!! $errors->first('why_hairdressing', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('why_us', 'What makes you want to join the Paul Kemp HAirdressing Team?') !!}
		{!! Form::textarea('why_us', old('why_us')) !!}
		{!! $errors->first('why_us', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	{!! Form::hidden('contact_status', '0') !!}
	
	{!! Form::hidden('quality', '0') !!}
	
	<div class="row buttons">
	{!! Form::submit('Send') !!}
	</div>
	</div> <!--end elements (about you)-->
</div><!-- end accordion-->

{!! Form::close() !!}

</div><!-- form -->