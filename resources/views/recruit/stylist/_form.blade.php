{!! Form::open(array(
	'action' => 'StylistController@store', 'id' => 'stylist-form'
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

		{{ Form::hidden('id', '') }}
		
		{!! Form::hidden('salon_id', '2') !!}

		<div class="field">
			{!! Form::label('first_name', 'First Name', ['class' => 'label']) !!}
			{!! Form::text('first_name', old('first_name'), ['class' => 'input']) !!}
			{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('second_name', 'Second Name', ['class' => 'label']) !!}
			{!! Form::text('second_name', old('second_name'), ['class' => 'input']) !!}
			{!! $errors->first('second_name', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('address1', 'Address 1', ['class' => 'label']) !!}
			{!! Form::text('address1', old('address1'), ['class' => 'input']) !!}
			{!! $errors->first('address1', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('address2', 'Address 2', ['class' => 'label']) !!}
			{!! Form::text('address2', old('address2'), ['class' => 'input'], ['class' => 'input']) !!}
			{!! $errors->first('address2', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('town', 'Town/City', ['class' => 'label'], ['class' => 'label']) !!}
			{!! Form::text('town', old('town'), ['class' => 'input']) !!}
			{!! $errors->first('town', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('postcode', 'Postcode', ['class' => 'label']) !!}
			{!! Form::text('postcode', old('postcode'), ['class' => 'input']) !!}
			{!! $errors->first('postcode', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('email', 'Email Address', ['class' => 'label']) !!}
			{!! Form::text('email', old('email'), ['class' => 'input']) !!}
			{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('phone', 'Phone Number', ['class' => 'label']) !!}
			{!! Form::text('phone', old('phone'), ['class' => 'input']) !!}
			{!! $errors->first('phone', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('mobile', 'Mobile Number', ['class' => 'label']) !!}
			{!! Form::text('mobile', old('mobile'), ['class' => 'input']) !!}
			{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}	
		</div>
		
		<h3 class="title is-4 has-text-primary">2. Other Info</h3>
		
		<div class="field">
			{!! Form::label('current_emp', 'What is your current employment status?', ['class' => 'label']) !!}
			<div class="control is-expanded">
				<div class="select is-fullwidth">
					{!! Form::select('current_emp', array(
						'In hair role' => 'In Hairdressing Role',
						'In non hair role' => 'In non-hairdressing role',
						'Unemployed' => 'Unemployed'
						), old('current_emp'), ['placeholder' => '-- Please Select --']) !!}
					{!! $errors->first('current_emp', '<div class="errorMessage">:message</div>') !!}
				</div>
			</div>
		</div>
		
		<div class="field">
			{!! Form::label('current_emp_des', 'If employed, please tell us where', ['class' => 'label']) !!}
			{!! Form::text('current_emp_des', old('current_emp_des')) !!}
			{!! $errors->first('current_emp_des', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('school_qual', 'What qualifications did you achieve at school?', ['class' => 'label']) !!}
			<div class="control is-expanded">
				<div class="select is-fullwidth">
					{!! Form::select('school_qual', array(
						'up to 4 GCSE' => 'Up to 4 GCSE\'s',
						'4 or more GCSE' => '4 or more GCSE\'s',
						'1 or more A level' => '1 or more A Level\'s',
						'Other' => 'Other'
						), old('school_qual'), ['placeholder' => '-- Please Select --']) !!}
					{!! $errors->first('school_qual', '<div class="errorMessage">:message</div>') !!}
				</div>
			</div>
		</div>
		
		<div class="field">
			{!! Form::label('qual_non_hair', 'Please state any non-hairdressing qualifications', ['class' => 'label']) !!}
			{!! Form::text('qual_non_hair', old('qual_non_hair'), ['class' => 'input']) !!}
			{!! $errors->first('qual_non_hair', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('experience', 'How many years hairdressing experience do you have? (Since qualified)', ['class' => 'label']) !!}
			<div class="control is-expanded">
				<div class="select is-fullwidth">
					{!! Form::select('experience', array(
						'None' => 'None',
						'Up to 12 month' => 'Up to 12 momths',
						'1 to 2 years' => '1 to 2 years',
						'2 to 4 years' => '2 to 4 years',
						'4 to 8 years' => '4 to 8 years',
						'8 to 10 years' => '8 to 10 years',
						'10 years plus' => '10 plus years'
						), old('experience'), ['placeholder' => '-- Please Select --']) !!}
					{!! $errors->first('experience', '<div class="errorMessage">:message</div>') !!}
				</div>
			</div>
		</div>
		
		<div class="field">
			{!! Form::label('current_position', 'Which of these best describes your current level?', ['class' => 'label']) !!}
			<div class="control is-expanded">
				<div class="select is-fullwidth">
					{!! Form::select('current_position', array(
						'Junior' => 'Junior Stylist',
						'Graduate' => 'Graduate Stylist',
						'Stylist' => 'Stylist',
						'Senior' => 'Senior Stylist',
						'Director' => 'Director'
						), old('current_position'), ['placeholder' => '-- Please Select --']) !!}
					{!! $errors->first('current_position', '<div class="errorMessage">:message</div>') !!}
				</div>
			</div>
		</div>
		
		<div class="field">
			{!! Form::label('client_base', 'Do you have an existing client base?', ['class' => 'label']) !!}
			<div class="control is-expanded">
				<div class="select is-fullwidth">
					{!! Form::select('client_base', array(
						'Local' => 'Yes - Local',
						'Other Area' => 'Yes - Other Area',
						'No' => 'No'
						), old('client_base'), ['placeholder' => '-- Please Select --']) !!}
					{!! $errors->first('client_base', '<div class="errorMessage">:message</div>') !!}
				</div>
			</div>
		</div>
		
		<div class="field">
			{!! Form::label('qualifications', 'Hairdressing Qualifications', ['class' => 'label']) !!}
			<div class="control is-expanded">
				<div class="select is-fullwidth">
					{!! Form::select('qualifications', array(
						'NVQ 1' => 'NVQ Level 1',
						'NVQ 2' => 'NVQ Level 2',
						'NVQ 3' => 'NVQ Level 3',
						'Other' => 'Other'
						), old('qualifications'), ['placeholder' => '-- Please Select --']) !!}
					{!! $errors->first('qualifications', '<div class="errorMessage">:message</div>') !!}
				</div>
			</div>
		</div>
		
		<div class="field">
			{!! Form::label('qual_non_hair', 'Any other Qualifications', ['class' => 'label']) !!}
			{!! Form::text('qual_non_hair', old('qual_non_hair')) !!}
			{!! $errors->first('qual_non_hair', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="box">
			<p>Please check the box if you have experience in the following areas:</p>
			
			<div class="adexBox">
				{!! Form::label('adex_stock', 'Stock Control', ['class' => 'label']) !!}
				{!! Form::checkbox('adex_stock') !!}
				{!! $errors->first('adex_stock', '<div class="errorMessage">:message</div>') !!}
			</div>
			
			<div class="adexBox">
				{!! Form::label('adex_manage', 'Management', ['class' => 'label']) !!}
				{!! Form::checkbox('adex_manage') !!}
				{!! $errors->first('adex_manage', '<div class="errorMessage">:message</div>') !!}
			</div>
			
			<div class="adexBox">
				{!! Form::label('adex_train', 'Training', ['class' => 'label']) !!}
				{!! Form::checkbox('adex_train') !!}
				{!! $errors->first('adex_train', '<div class="errorMessage">:message</div>') !!}
			</div>
			
			<div class="adexBox">
				{!! Form::label('adex_reception', 'Reception', ['class' => 'label']) !!}
				{!! Form::checkbox('adex_reception') !!}
				{!! $errors->first('adex_reception', '<div class="errorMessage">:message</div>') !!}
			</div>
			
			<div class="adexBox">
				{!! Form::label('adex_marketing', 'Marketing', ['class' => 'label']) !!}
				{!! Form::checkbox('adex_marketing') !!}
				{!! $errors->first('adex_marketing', '<div class="errorMessage">:message</div>') !!}
			</div>
			
			<div class="adexBox">
				{!! Form::label('adex_cservice', 'Customer Service', ['class' => 'label']) !!}
				{!! Form::checkbox('adex_cservice') !!}
				{!! $errors->first('adex_cservice', '<div class="errorMessage">:message</div>') !!}
			</div>
		</div> <!--end adex-->
			
		</div> <!--end elements (other info)-->
		
		<h3 class="title is-4 has-text-primary">3. Hairdressing Skills</h3>
		
		<p class="application">Please rate yourself from 1 (poor) to 5 (excellent) at the following:</p>

		<div class="field">
			{!! Form::label('cutting_skills', 'Cutting Skills', ['class' => 'label']) !!}
			{!! Form::selectRange('cutting_skills', 1, 5, old('cutting_skills'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('cutting_skills', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('colour_knowledge', 'Colour Knowledge', ['class' => 'label']) !!}
			{!! Form::selectRange('colour_knowledge', 1, 5, old('colour_knowledge'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('colour_knowledge', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('colour_skills', 'Colouring Skills', ['class' => 'label']) !!}
			{!! Form::selectRange('colour_skills', 1, 5, old('colour_skills'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('colour_skills', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="field">
			{!! Form::label('men', 'Mens Hairdressing', ['class' => 'label']) !!}
			{!! Form::selectRange('men', 1, 5, old('men'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('men', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('extensions_weave', 'Extensions (weave)', ['class' => 'label']) !!}
			{!! Form::selectRange('extensions_weave', 1, 5, old('extensions_weave'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('extensions_weave', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('extensions_other', 'Extensions (other)', ['class' => 'label']) !!}
			{!! Form::selectRange('extensions_other', 1, 5, old('extensions_other'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('extensions_other', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('chem_straighten', 'Chemical Straightening', ['class' => 'label']) !!}
			{!! Form::selectRange('chem_straighten', 1, 5, old('chem_straighten'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('chem_straighten', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('braz_blow', 'Brazilian Blowdry', ['class' => 'label']) !!}
			{!! Form::selectRange('braz_blow', 1, 5, old('braz_blow'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('braz_blow', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('hair_up', 'Hair Up', ['class' => 'label']) !!}
			{!! Form::selectRange('hair_up', 1, 5, old('hair_up'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('hair_up', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('awards', 'Please state any hairdressing awards', ['class' => 'label']) !!}
			{!! Form::text('awards', old('awards')) !!}
			{!! $errors->first('awards', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<h2 class="reveal">4. About you</h2>

		<div class="field">
			{!! Form::label('about_you', 'Tell us a bit about yourself', ['class' => 'label']) !!}
			{!! Form::textarea('about_you', old('about_you')) !!}
			{!! $errors->first('about_you', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('why_hairdressing', 'Why did you choose to be a hairdresser?', ['class' => 'label']) !!}
			{!! Form::textarea('why_hairdressing', old('why_hairdressing')) !!}
			{!! $errors->first('why_hairdressing', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="field">
			{!! Form::label('why_us', 'Why do you want to join the Paul Kemp Hairdressing Team?', ['class' => 'label']) !!}
			{!! Form::textarea('why_us', old('why_us')) !!}
			{!! $errors->first('why_us', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		{!! Form::hidden('contact_status', '0') !!}
		
		{!! Form::hidden('quality', '0') !!}

		<div class="field buttons">
		{!! Form::submit('Send') !!}
		</div>

	</div>
</div>
{!! Form::close() !!}
