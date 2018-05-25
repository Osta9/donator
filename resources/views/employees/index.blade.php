@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="d-flex justify-content-between">
            <b-col cols="6" md="3" class="donor-form">
                <b-form-input v-model="filter" placeholder="Type to Search" />
            </b-col>
            <b-col cols="6" md="3">
                <a href="/employees/create">
                    <b-btn variant="donor" class="mb-2 w-100">
                        Novi zaposlenik
                    </b-btn>
                </a>
            </b-col>
        </b-row>

        <b-table striped hover stacked="md" :items="filterEmployees({{$employees}})"
                 :fields="employeeFields" :current-page="employeesPage" :per-page="perPage"
                 @row-clicked="employeeClick">
            <template slot="blood_type" slot-scope="data">
                <img :src="'/../img/' + data.item.blood_type.img + '.png'"
                     class="img-fluid blood-type">
            </template>
        </b-table>
        <b-pagination align="right" :total-rows="filterEmployees({{$employees}}).length" v-model="employeesPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
