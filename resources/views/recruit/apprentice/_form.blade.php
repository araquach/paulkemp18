{!! Form::open(array(
	'action' => 'ApprenticeController@store', 'id' => 'apprentice-form'
)) !!}

<div class="form">

	<p class="has-text-danger">Fields with * are required.</p>

@if (count($errors) > 0)

<div class="errors">
		<p>Please fix the following input errors:</p>
		<ul>
	   		 @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    	@endforeach
		</ul>
</div>
   
@endif
	
<div>
	
	<h3 class="title is-4 has-text-primary">1. Contact Information</h3>
	
	<div>

		{!! Form::hidden('id') !!}
		
		{!! Form::hidden('salon_id', '2') !!}

	<div class="field">
		{!! Form::label('first_name', 'First Name', ['class' => 'label']) !!}
		{!! Form::text('first_name', old('first_name'), ['class' => 'input']) !!}
		{!! $errors->first('first_name', '<div class="has-text-danger">:message</div>') !!}
	</div>
	
	<div class="field">
		{!! Form::label('second_name', 'Last Name', ['class' => 'label']) !!}
		{!! Form::text('second_name', old('second_name'), ['class' => 'input']) !!}
		{!! $errors->first('second_name', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('age', 'Age', ['class' => 'label']) !!}
		{!! Form::text('age', old('age'), ['class' => 'input']) !!}
		{!! $errors->first('age', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('address1', 'Address 1', ['class' => 'label']) !!}
		{!! Form::text('address1', old('address1'), ['class' => 'input']) !!}
		{!! $errors->first('address1', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('address2', 'Address 2', ['class' => 'label']) !!}
		{!! Form::text('address2', old('address2'), ['class' => 'input']) !!}
		{!! $errors->first('address2', '<div class="has-text-danger">:message</div>') !!}
	</div>
	
	<div class="field">
		{!! Form::label('town', 'Town/City', ['class' => 'label']) !!}
		{!! Form::text('town', old('town'), ['class' => 'input']) !!}
		{!! $errors->first('town', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('postcode', 'Postcode', ['class' => 'label']) !!}
		{!! Form::text('postcode', old('postcode'), ['class' => 'input']) !!}
		{!! $errors->first('postcode', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('email', 'Email Address', ['class' => 'label']) !!}
		{!! Form::text('email', old('email'), ['class' => 'input']) !!}
		{!! $errors->first('email', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('phone', 'Phone Number', ['class' => 'label']) !!}
		{!! Form::text('phone', old('phone'), ['class' => 'input']) !!}
		{!! $errors->first('phone', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('mobile', 'Mobile Number', ['class' => 'label']) !!}
		{!! Form::text('mobile', old('mobile'), ['class' => 'input']) !!}
		{!! $errors->first('mobile', '<div class="has-text-danger">:message</div>') !!}
	</div>
	
	<h3 class="title is-4 has-text-primary">2. Experience</h3>
		
	<div class="field">
		{!! Form::label('current_emp', 'Are you currently in employment?', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::select('current_emp', array(
					'1st year apprentice' => '1st Year Apprentice',
					'2nd year apprentice' => '2nd Year Apprentice',
					'L1 College' => 'Level 1 College',
					'L2 College' => 'Level 2 College',
					'School Link' => 'School Link',
					'Other' => 'Other'
					), old('current_emp'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('current_emp', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>
	
	<div class="field">
		{!! Form::label('in_salon', 'Current Position', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::select('in_salon', array(
					'In salon' => 'In Salon',
					'Other industry' => 'Other Industry',
					'Unemployed' => 'Not employed'
					), old('in_salon'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('in_salon', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>
	
	<div class="field">
		{!! Form::label('salon_name', 'Please state your current workplace (if applicable)', ['class' => 'label']) !!}
		{!! Form::text('salon_name', old('salon_name'), ['class' => 'input']) !!}
		{!! $errors->first('salon_name', '<div class="has-text-danger">:message</div>') !!}
	</div>
	
	<div class="field">
		{!! Form::label('qualification_school', 'What qualification did you achieve at school?', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::select('qualification_school', array(
					'Up to 4 GCSE' => 'Up to 4 GCSE\'s',
					'4 or more GCSE' => '4 or more GCSE\'s',
					'1 or more A level' => '1 or more A level\'s'
					), old('qualification_school'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('qualification_school', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>
	
	<div class="field">
		{!! Form::label('qualification_hair', 'Are you currently doing any hairdressing qualifications?', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::select('qualification_hair', array(
					'Towards NVQ1' => 'Working towards NVQ level 1',
					'Towards NVQ2' => 'Working towards NVQ level 2',
					'Towards NVQ3' => 'Working towards NVQ level 3',
					'Other' => 'Other'
					), old('qualification_hair'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('qualification_hair', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>
	
	<h3 class="title is-4 has-text-primary">3. Hairdressing Skills</h3>
	<div>
	
	<p>Please rate your main interests from 1 (least) to 5 (most) for the following:</p>

	<div class="field">
		{!! Form::label('cutting', 'Cutting Hair', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::selectRange('cutting', 1, 5, old('cutting'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('cutting', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="field">
		{!! Form::label('styling', 'Styling Hair', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::selectRange('styling', 1, 5, old('styling'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('styling', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="field">
		{!! Form::label('colouring', 'Colouring Hair', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::SelectRange('colouring', 1, 5, old('colouring'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('colouring', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>
	
	<div class="field">
		{!! Form::label('men', 'Men\'s Hairdressing', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::SelectRange('men', 1, 5, old('men'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('men', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="field">
		{!! Form::label('extensions', 'Extensions', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::SelectRange('extensions', 1, 5, old('extensions'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('extensions', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="field">
		{!! Form::label('chem_straightening', 'Chemical Straightening', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::SelectRange('chem_straightening', 1, 5, old('chem_straightening'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('chem_straightening', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="field">
		{!! Form::label('brazil_blow', 'Brazilian Blowdry\'s', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::SelectRange('brazil_blow', 1, 5, old('brazil_blow'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('brazil_blow', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="field">
		{!! Form::label('hair_up', 'Hair Up Styling', ['class' => 'label']) !!}
		<div class="control is-expanded">
			<div class="select is-fullwidth">
				{!! Form::SelectRange('hair_up', 1, 5, old('hair_up'), ['placeholder' => 'Please Select']) !!}
				{!! $errors->first('hair_up', '<div class="has-text-danger">:message</div>') !!}
			</div>
		</div>
	</div>
	
	<h3 class="title is 4 has-text-primary">4. About you</h3>
	
	<div class="field">
		{!! Form::label('about', 'Tell us a bit about yourself', ['class' => 'label']) !!}
		{!! Form::textarea('about', old('about'), ['class' => 'textarea']) !!}
		{!! $errors->first('about', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('why_hairdressing', 'Why did you choose hairdressing as a career?', ['class' => 'label']) !!}
		{!! Form::textarea('why_hairdressing', old('why_hairdressing'), ['class' => 'textarea']) !!}
		{!! $errors->first('why_hairdressing', '<div class="has-text-danger">:message</div>') !!}
	</div>

	<div class="field">
		{!! Form::label('why_us', 'What makes you want to join the Paul Kemp Hairdressing Team?', ['class' => 'label']) !!}
		{!! Form::textarea('why_us', old('why_us'), ['class' => 'textarea']) !!}
		{!! $errors->first('why_us', '<div class="has-text-danger">:message</div>') !!}
	</div>
	
	{!! Form::hidden('contact_status', '0') !!}
	
	{!! Form::hidden('quality', '0') !!}
	
	<div class="field">
	{!! Form::submit('Send', ['class' => 'button is-primary']) !!}
	</div>
</div><!-- end accordion-->

{!! Form::close() !!}

</div><!-- form -->