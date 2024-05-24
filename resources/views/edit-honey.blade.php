@include('rightsidebar')

<div class="container">
    <h1>Update Honey</h1>

    <form action="{{  route('updateHoney', ['id' => $honey->id])}}" method="POST">
        @csrf

            @method('PUT') {{-- Use PUT method for updating --}}


        <div class="form-group">
            <label for="hive_id">Hive ID:</label>
            <input type="text" name="hive_id" id="hive_id" class="form-control" value="{{ $honey->hive_id }}" required>
        </div>

        <div class="form-group">
            <label for="quantity_kg">Quantity (kg):</label>
            <input type="text" name="quantity_kg" id="quantity_kg" class="form-control" value="{{ $honey->quantity_kg  }}" required>
        </div>

        <div class="form-group">
            <label for="kind_of_honey">Kind of Honey:</label>
            <input type="text" name="kind_of_honey" id="kind_of_honey" class="form-control" value="{{  $honey->kind_of_honey  }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Honey</button>
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

@include('style')
@include('sidebar')
@include('script')
