@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">Sponsorizza il tuo profilo</h3>
        <p class="text-center">Sponsorizzando il tuo profilo, nelle ricerche comparirà prima degli altri dottori, inoltre il tuo profilo verrà aggiunto alla sezione "Medici in evidenza". Scegli tra queste sponsorizzazioni e procedi con il pagamento</p>
        <div class="row">
          @foreach ($sponsorships as $sponsorship )
          <div class="card my-3 col-12 col-md-4 p-3 bg-primary">
              <div class="card-body">
                  <h5 class="card-title text-warning py-1">{{ $sponsorship->name }}</h5>
                  <h6 class="card-subtitle py-1 mb-2">Questa sponsorizzazione dura {{  $sponsorship->duration }} ore!</h6>
                  <h6 class="card-text py-1 text-warning">Prezzo: {{  $sponsorship->price }} €</h6>
              </div>
          </div>
          @endforeach
        </div>
        <div class="text-center">
          @if ($newSponsorships->last() != '' && $newSponsorships->last()->ends_at > now())
          <div class="bg-success text-center p-2 rounded mt-3 mb-4">
            <h3>Sponsorizzazione Confermata!</h3>
            <h3>Scade il {{$newSponsorships->last()->ends_at}}</h3>
          </div>
          @endif
          <form action="{{route('admin.sponsorship.store')}}" method="POST">
          @csrf
          <h3>Scegli qui la tua sponsorizzazione</h3>
          <select name="sponsorship_id" id="" required>
            <option value="" selected disabled>Seleziona una sponsorizzazione</option>
            @foreach ($sponsorships as $sponsorship)
              <option value="{{$sponsorship->id}}" >{{$sponsorship->name}} - {{$sponsorship->price}} €</option>
            @endforeach
        </select>
        </div>
        <div id="dropin-wrapper">
          <div id="checkout-message"></div>
          <div id="dropin-container"></div>
          <button class="btn btn-success" id="submit-button"  @if ($newSponsorships->last() != '' && $newSponsorships->last()->ends_at > now()) disabled @endif>Effettua pagamento</button>
      </div>
      <div class="text-center">
        <a href="{{route('admin.home')}}" class="card-link btn btn-primary mt-3">Torna alla Home</a>
      </div>
    </div>
    <script>
      var button = document.querySelector('#submit-button');
    
      braintree.dropin.create({
        // Insert your tokenization key here
        authorization: 'sandbox_5ryf9pb3_b7kn78s25f6b6wzd',
        container: '#dropin-container'
      }, function (createErr, instance) {
        button.addEventListener('click', function () {
          instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
            // When the user clicks on the 'Submit payment' button this code will send the
            // encrypted payment information in a variable called a payment method nonce
            $.ajax({
              type: 'POST',
              url: '/checkout',
              data: {'paymentMethodNonce': payload.nonce}
            }).done(function(result) {
              // Tear down the Drop-in UI
              instance.teardown(function (teardownErr) {
                if (teardownErr) {
                  console.error('Could not tear down Drop-in UI!');
                } else {
                  console.info('Drop-in UI has been torn down!');
                  // Remove the 'Submit payment' button
                  $('#submit-button').remove();
                }
              });
    
              if (result.success) {
                $('#checkout-message').html('<h1>Success</h1><p>Your Drop-in UI is working! Check your <a href="https://sandbox.braintreegateway.com/login">sandbox Control Panel</a> for your test transactions.</p><p>Refresh to try another transaction.</p>');
              } else {
                console.log(result);
                $('#checkout-message').html('<h1>Error</h1><p>Check your console.</p>');
              }
            });
          });
        });
      });
    </script>
@endsection