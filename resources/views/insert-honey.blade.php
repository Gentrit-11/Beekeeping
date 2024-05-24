@include('rightsidebar')
<form action="{{ url('insert-honey') }}" method="POST">
    @csrf
    <label for="hive_id">Hive ID:</label>
    <select name="hive_id" id="hive_id">
        @foreach($hives as $hive)
            <option value="{{ $hive->id }}">{{ $hive->id }}</option>
        @endforeach
    </select>

    <label for="quantity_kg">Quantity (kg):</label>
    <input type="number" name="quantity_kg" id="quantity_kg">

    <label for="Kind/lloji i mjaltes">Kind/lloji i mjaltes:</label>
    <select name="honey_category_id" id="honey_category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn">Create Honey</button>
</form>
<style>
form {
    max-width: 400px;
    width: 100%;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 50%;
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
    margin-bottom: 15px !important;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #3a5f21 !important;
   t;
        border: none;
}
.btn{
    color: white !important;
}
button:hover {
    background-color: #45a049;
}
</style>
@include('style')


@include('sidebar')
<!-- partial -->

<!-- partial -->

@include('script')
