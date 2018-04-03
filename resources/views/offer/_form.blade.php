{!! Form::model($offer, ['action' => ['OfferController@update', $offer->client_id], 'method' => 'PATCH', 'id' => 'offer-form']) !!}

<div class="form">
    
    {!! Form::hidden('id') !!}
    
    {!! Form::hidden('opt_out', '1') !!}
	
	<p>If you no longer wish to receive text offers just click 'Opt Out'</p>
	
	<div class="row buttons">
	{!! Form::submit('Opt Out') !!}
	</div>
    
    {!! Form::close() !!}
        
</div>