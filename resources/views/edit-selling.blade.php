@include('rightsidebar')
<div class="container">
    <h1>Edit Selling</h1>

    <form action="{{ route('updateSelling', ['sellingId' => $selling->id]) }}" method="POST">
        @csrf
        @method('PUT') {{-- Use PUT method for updating --}}

        <div class="form-group">

            <div class="form-group">
                <label for="honey_id">Honey ID:</label>
                <input type="text" name="honey_id" id="honey_id" class="form-control" value="{{ $selling->honey_id }}" readonly>
            </div>


        </div>

        <div class="form-group">
            <label for="hive_id">Hive ID:</label>
            <input type="text" name="hive_id" id="hive_id" class="form-control" value="{{ $selling->hive_id }}">
        </div>

        <div class="form-group">
            <label for="quantity_kg">Quantity (kg):</label>
            <input type="text" name="quantity_kg" id="quantity_kg" class="form-control" value="{{ $selling->quantity_kg }}">
        </div>

        <div class="form-group">
            <label for="kind_of_honey">Kind of Honey:</label>
            <input type="text" name="kind_of_honey" id="kind_of_honey" class="form-control" value="{{ $selling->kind_of_honey }}">
        </div>

        <div class="form-group">
            <label for="quantity_to_buy">Quantity to Buy (kg):</label>
            <input type="number" name="quantity_to_buy" id="quantity_to_buy" class="form-control" min="1" value="{{ $selling->quantity_to_buy }}">
        </div>

        <div class="form-group">
            <label for="personi">Buyer:</label>
            <input type="text" name="personi" id="personi" class="form-control" value="{{ $selling->personi }}">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $selling->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Selling</button>
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
            $('#hive_id, #quantity_kg, #kind_of_honey').val('');
            $('.btn-submit').prop('disabled', true);
            $('.zero-quantity-message').hide();
        } else {
            var selectedHoney = {!! json_encode($honeyData->toArray()) !!}.find(honey => honey.id == honeyId);
            $('#hive_id').val(selectedHoney.hive.id);
            $('#quantity_kg').val(selectedHoney.quantity_kg);
            $('#kind_of_honey').val(selectedHoney.kind_of_honey);
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
