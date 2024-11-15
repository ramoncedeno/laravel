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

                        <th scope="col">cancellation_card_number</th>
                        <th scope="col">cancellation_costumer_name</th>
                        <th scope="col">cancellation_sales_date</th>
                        <th scope="col">cancellation_employee_user_sunneljs</th>
                        <th scope="col">cancellation_employee_user_sunnelarca</th>
                        <th scope="col">cancellation_employee_name</th>
                        <th scope="col">cancellation_employee_number</th>
                        <th scope="col">cancellation_trade_name</th>
                        <th scope="col">cancellation_product_number</th>
                        <th scope="col">cancellation_product_name</th>
                        <th scope="col">cancellation_product_status</th>
                        <th scope="col">cancellation_product_status_date</th>
                        <th scope="col">cancellation_product_billed_periods</th>
                        <th scope="col">cancellation_cancellation_date</th>
                        <th scope="col">cancellation_employee_cancellationusersunneljs</th>
                        <th scope="col">cancellation_employee_cancellationname</th>
                        <th scope="col">cancellation_employee_cancellationnumber</th>
                        <th scope="col">cancellation_employee_cancellationusersunnelarca</th>


                    </tr>
                </thead>

                <tbody>
                    @foreach ($cancellations as $cancellation)
                        <tr>

                            <td>{{$cancellation->cancellation_card_number}}</td>
                            <td>{{$cancellation->cancellation_costumer_name}}</td>
                            <td>{{$cancellation->cancellation_sales_date}}</td>
                            <td>{{$cancellation->cancellation_employee_user_sunneljs}}</td>
                            <td>{{$cancellation->cancellation_employee_user_sunnelarca}}</td>
                            <td>{{$cancellation->cancellation_employee_name}}</td>
                            <td>{{$cancellation->cancellation_employee_number}}</td>
                            <td>{{$cancellation->cancellation_trade_name}}</td>
                            <td>{{$cancellation->cancellation_product_number}}</td>
                            <td>{{$cancellation->cancellation_product_name}}</td>
                            <td>{{$cancellation->cancellation_product_status}}</td>
                            <td>{{$cancellation->cancellation_product_status_date}}</td>
                            <td>{{$cancellation->cancellation_product_billed_periods}}</td>
                            <td>{{$cancellation->cancellation_cancellation_date}}</td>
                            <td>{{$cancellation->cancellation_employee_cancellationusersunneljs}}</td>
                            <td>{{$cancellation->cancellation_employee_cancellationname}}</td>
                            <td>{{$cancellation->cancellation_employee_cancellationnumber}}</td>
                            <td>{{$cancellation->cancellation_employee_cancellationusersunnelarca}}</td>


                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

        <!-- Paginación -->
        <div class="card-footer d-flex justify-content-center">
            {{ $cancellations->links('pagination::bootstrap-5') }}

        </div>

        <a href="{{ route('export.cancellations') }}" class="btn btn-primary">Download </a>
    </div>
</div>
