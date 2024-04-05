<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @include('fragments.css.header')
</head>
<body>
    <table id="productTable" class="table" >
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<!-- script -->
@include('fragments.js.js')
<script>
$(document).ready(function() {
    $('#productTable').DataTable({
        dom: 'Bfrtip',
        destroy: true,
        searching: true,
        paging: true,
        select: true,
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Product",
        },
        autoWidth: true,
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: '{{ route("product.datatables") }}', 
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'qty', name: 'qty' },
            { data: 'price', name: 'price' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action' },
        ],
    
    });
});
</script>
</body>
</html>
