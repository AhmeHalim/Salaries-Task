<table  class="table table-striped table-bordered table-hover" id="datatable">
  <thead>
    <th>#</th>
    <th>{{trans('home.employee')}}</th>
    <th>{{trans('home.salary')}}</th>
    <th>{{trans('home.payment_day')}}</th>
    <th>{{trans('home.bonous')}}</th>
    <th>{{trans('home.bonous_payment_day')}}</th>
  </thead>
  <tbody>
    @foreach ($salaries as $key=>$salary)
        <tr>
          <td>{{ $key+1}}</td>
          <td> {{ $salary->employee->name }}</td>
          <td> {!! $salary->salary !!}</td>
          <td> {!! $salary->payment_day !!}</td>
          <td> {!! $salary->bonous !!}</td>
          <td> {!! $salary->bonous_payment_day !!}</td>
        </tr>
    @endforeach
  </tbody>
</table>
