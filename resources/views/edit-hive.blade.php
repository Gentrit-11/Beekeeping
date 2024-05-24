@include('rightsidebar')

<div class="container">


    <form action="{{  route('updateHive', ['id' => $hive->id]) }}" method="POST">
        @csrf

            @method('PUT') {{-- Use PUT method for updating --}}


        <div class="form-group">
            <label for="HiveID">Hive ID:</label>
            <input type="text" name="HiveID" id="HiveID" class="form-control" value="{{ isset($hive) ? $hive->HiveID : '' }}" required>
        </div>

        <div class="form-group">
            <label for="HiveColor">Hive Color:</label>
            <input type="text" name="HiveColor" id="HiveColor" class="form-control" value="{{ isset($hive) ? $hive->HiveColor : '' }}" required>
        </div>

        <!-- Add more fields as needed -->

        <button type="submit" class="btn btn-primary">{{ isset($hive) ? 'Update Hive' : 'Add Hive' }}</button>
    </form>
</div>

<style>
    .container {
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
        color: white;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

@include('style')
@include('sidebar')
@include('script')
