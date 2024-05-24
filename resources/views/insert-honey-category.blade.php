<!-- resources/views/honey-category-form.blade.php -->
@include('rightsidebar')

<form action="{{ url('insert-honey-category') }}" method="POST">
    @csrf

    <label for="name">Category Name:</label>
    <input type="text" name="name" id="name">

    <button type="submit" class="btn">Create Honey Category</button>
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
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #3a5f21 !important;

        border: none;
    }

    .btn{
    color: white !important;
}
    </style>
@include('style')


@include('sidebar')
<!-- partial -->

<!-- partial -->

@include('script')
