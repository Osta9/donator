@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="d-flex justify-content-between">
            <b-col cols="6" md="3" class="donor-form">
                <b-form-input v-model="filter" placeholder="Type to Search" />
            </b-col>
            <b-col cols="6" md="3">
                <a href="/donators/create">
                    <b-btn variant="donor" class="mb-2 w-100">
                        Novi donator
                    </b-btn>
                </a>
            </b-col>
        </b-row>

        <b-table striped hover stacked="md" :items="filterDonators({{$donators}})"
                 :fields="donatorFields" :current-page="donatorsPage" :per-page="perPage"
                 @row-clicked="donatorClick">
            <template slot="blood_type" slot-scope="data">
                <img :src="'/../img/' + data.item.blood_type.img + '.png'"
                     class="img-fluid blood-type">
            </template>
        </b-table>
        <b-pagination align="right" :total-rows="filterDonators({{$donators}}).length" v-model="donatorsPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
