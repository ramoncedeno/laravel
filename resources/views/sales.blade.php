<!-- Incluye el archivo CSS de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

<!-- Livewire Component -->
<div class="container mt-5">
    <!-- Tabla con clases mejoradas de Bootstrap -->
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Leads</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-striped table-hover">

                <thead class="table-primary">
                    <tr>
                        <th scope="col">sales_card_number</th>
                        <th scope="col">sales_costumer_name</th>
                        <th scope="col">sales_costumer_date</th>
                        <th scope="col">sales_cosumer_contract</th>
                        <th scope="col">sales_acount</th>
                        <th scope="col">sales_sale_date</th>
                        <th scope="col">sales_employee_user</th>
                        <th scope="col">sales_employee_name</th>
                        <th scope="col">sales_trade_name</th>
                        <th scope="col">sales_product_number</th>
                        <th scope="col">sales_product_name</th>
                        <th scope="col">sales_employee_number</th>
                        <th scope="col">sales_employee_usersunnel</th>
                        <th scope="col">created_at</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>{{$sale->sales_card_number}}</td>
                            <td>{{$sale->sales_costumer_name}}</td>
                            <td>{{$sale->sales_costumer_date}}</td>
                            <td>{{$sale->sales_cosumer_contract}}</td>
                            <td>{{$sale->sales_acount}}</td>
                            <td>{{$sale->sales_sale_date}}</td>
                            <td>{{$sale->sales_employee_user}}</td>
                            <td>{{$sale->sales_employee_name}}</td>
                            <td>{{$sale->sales_trade_name}}</td>
                            <td>{{$sale->sales_product_number}}</td>
                            <td>{{$sale->sales_product_name}}</td>
                            <td>{{$sale->sales_employee_number}}</td>
                            <td>{{$sale->sales_employee_usersunnel}}</td>
                            <td>{{$sale->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

        <!-- Paginación -->
        <div class="card-footer d-flex justify-content-center">
            {{ $sales->links('pagination::bootstrap-5') }}

        </div>

        <a href="{{ route('export.sales') }}" class="btn btn-primary">Download </a>
    </div>
</div>
