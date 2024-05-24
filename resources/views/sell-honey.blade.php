@include('rightsidebar')
<div class="container">
    <!-- Inside sell-honey.blade.php -->


    <form action="{{ url('sell-honey') }}" method="POST">
        @csrf

        <div class="form-group">

            <label for="honey_id">Honey ID:</label>
            <select name="honey_id" id="honey_id" class="form-control">
                {{-- Loop through honeyData to populate dropdown --}}
                <option>Zgjedhni numrin e mjaltes</option>
                @foreach ($honeyData as $honey)
                    <option value="{{ $honey->id }}">{{ $honey->id }}</option>
                @endforeach
            </select>

            <!-- Separate fields to display additional information -->
            <div class="form-group">
                <label for="hive_id">Hive ID:</label>
                <input type="text" name="hive_id" id="hive_id" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="Special-hive_id">Special Hive ID:</label>
                <input type="text" name="Special-hive_id" id="Special-hive_id" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="quantity_kg">Quantity (kg):</label>
                <input type="text" name="quantity_kg" id="quantity_kg" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="kind_of_honey">Kind of Honey:</label>
                <input type="text" name="kind_of_honey" id="kind_of_honey" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="quantity_to_buy">Quantity to Buy (kg):</label>
                <input type="number" name="quantity_to_buy" id="quantity_to_buy" class="form-control" min="1"
                    required>
            </div>
            <div class="form-group">
                <label for="personi">Bleresi:</label>
                <input type="text" name="personi" id="personi" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control">
            </div>
            @if ($zeroQuantityError)
                <div class="alert alert-danger zero-quantity-message">
                    Nuk mundesh me shit prej kesaj koshere sepse ska mjalt te mbetur </div>

                <button type="submit" class="btn1 btn btn-primary btn-submit" disabled>Sell Honey</button>
            @else
                <button type="submit" class="btn1 btn btn-primary btn-submit">Sell Honey</button>
            @endif
            <div class="alert alert-danger quantity-error-message">
                Nuk ka aq sasi te mjaltes ne koshere sa doni te shitni ju ju lutem shikoni sasin e mjaltes ne koshere
            </div>


    </form>
</div>


<style>
    form {
        max-width: 600px;
        width: 100%;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    select,
    input[type="number"],
    input[type="text"],
    button {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #3a5f21 !important;

        border: none;
    }

    .btn1 {
        color: white !important;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    function updateFormState() {
        var quantityToBuy = parseFloat($('#quantity_to_buy').val());
        var availableQuantity = parseFloat($('#quantity_kg').val());

        var quantityErrorMessage = 'Nuk ka aq sasi te mjaltes ne koshere sa doni te shitni.';
        var zeroQuantityErrorMessage = 'Nuk mundesh me shit prej kesaj koshere sepse ska mjalt te mbetur.';

        var quantityError = quantityToBuy > availableQuantity || availableQuantity <= 0;
        $('.quantity-error-message').toggle(quantityError).text(quantityError ? quantityErrorMessage : '');

        $('.zero-quantity-message').toggle(availableQuantity <= 0).text(zeroQuantityErrorMessage);

        $('.btn-submit').prop('disabled', quantityError);
    }

    $('#honey_id, #quantity_to_buy').on('change input', function() {
        updateFormState();
    });

    $('form').submit(function(event) {
        if ($('.btn-submit').prop('disabled')) {
            event.preventDefault();
        }
    });

    updateFormState();

    $('#honey_id').change(function() {
        var honeyId = $(this).val();
        if (honeyId === 'Zgjedhni numrin e mjaltes') {
            $('#hive_id, #quantity_kg, #kind_of_honey, #Special-hive_id').val('');
            $('.btn-submit').prop('disabled', true);
            $('.zero-quantity-message').hide();
        } else {
            var selectedHoney = {!! json_encode($honeyData->toArray()) !!}.find(honey => honey.id == honeyId);
            $('#hive_id').val(selectedHoney.hive.id);
            $('#quantity_kg').val(selectedHoney.quantity_kg);
            $('#kind_of_honey').val(selectedHoney.kind_of_honey);
            $('#Special-hive_id').val(selectedHoney.hive.HiveID); // Populate Special Hive ID field
            updateFormState();
        }
    });
});


</script>






@include('style')


@include('sidebar')
<!-- partial -->

<!-- partial -->

@include('script')
