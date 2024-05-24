
<div>

    <div class="container">
        <h1>Shitjet</h1>

        {{-- <input type="text" wire:model="searchSell" placeholder="Search..."> --}}

{{-- @dd( $searchSell) --}}

        <table class="custom-table">

            {{-- {{dd($searchSell)}} --}}

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Honey ID</th>
                    <th>Hive ID</th>
                    <th>Special Hive ID</th>
                    <th>Quantity</th>
                    <th>Kind of Honey</th>
                    <th>Quantity to Buy</th>
                    <th>Buyer</th>
                    <th>Price</th>
                    <th>Date Sold</th>
                    <th>Shlyej</th>
                    <th>Ndrysho</th>
                </tr>
            </thead>
            <tbody id="honeyTableBody"> <!-- Added ID to table body -->
                @foreach ($sellings as $selling)
                    {{ $selling->id }} // Add this line to debug

                    <tr>
                        <td>{{ $selling->id }}</td>
                        <td>{{ $selling->honey_id }}</td>
                        <td>{{ $selling->hive_id }}</td>
                        <td>{{ $selling->hive->HiveID }}</td>

                        <td>{{ $selling->quantity_kg }}</td>
                        <td>{{ $selling->kind_of_honey }}</td>
                        <td>{{ $selling->quantity_to_buy }}</td>
                        <td>{{ $selling->personi }}</td>
                        <td>{{ $selling->price }}</td>
                        <td>{{ $selling->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <form action="{{ route('returnHoney', ['sellingId' => $selling->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Kthe Mjalten</button>
                            </form>
                        </td>
                        <td> <a href="{{ route('editSelling', ['id' => $selling->id]) }}" class="btn btn-primary">Ndryshoe
                                shitjen</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $sellings->links('pagination::bootstrap-5') }} --}}

    </div>
    </div>

    <style>
        .container {
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

        .custom-table {
            width: 95%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .custom-table th,
        .custom-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .custom-table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .custom-table tbody tr:hover {
            background-color: #e0e0e0;
        }
    </style>

@include('style')

    @include('sidebar')
    @include('script')
