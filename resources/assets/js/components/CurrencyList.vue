<template>

    <div class='row'>
        <h1>All EUR rates</h1>
        <form action="#" @submit.prevent="filterByQuoteCurrency()">
            <!--<div class="input-group">-->
                <input v-model="search" v-on:keyup="filterByQuoteCurrency()" type="text" class="form-control" autofocus placeholder="Search by quote currency ...">
            <!--</div>-->
        </form>
        <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Base currency</th>
            <th>Quote currency</th>
            <th>Symbol</th>
            <th>Date</th>
            <th>Quote type</th>
            <th>Bid</th>
            <th>Mid</th>
            <th>Ask</th>
            <th>Spread</th>
            <th>Text</th>
            <th>Source</th>
        </tr>
        </thead>
            <tbody>
                <tr v-if='rates.length === 0'><td>There are no rates yet!</td></tr>
                <tr v-for="rate in rates">
                    <td scope="row">{{rate.id}}</td>
                    <td style="white-space: nowrap;">{{rate.base_currency}}</td>
                    <td style="white-space: nowrap;">{{rate.quote_currency}}</td>
                    <td style="white-space: nowrap;">{{rate.symbol}}</td>
                    <td style="white-space: nowrap;">{{rate.date}} {{rate.time}}</td>
                    <td style="white-space: nowrap;">{{rate.quote_type}}</td>
                    <td style="white-space: nowrap;">{{rate.bid}}</td>
                    <td style="white-space: nowrap;">{{rate.mid}}</td>
                    <td style="white-space: nowrap;">{{rate.ask}}</td>
                    <td style="white-space: nowrap;">{{rate.spread}}</td>
                    <td style="white-space: nowrap;">{{rate.text}}</td>
                    <td style="white-space: nowrap;">{{rate.source}}</td>

                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                search: null,
                rates: [],
                rate: {
                    id: '',
                    base_currency: '',
                    quote_currency: '',
                    symbol: '',
                    date: '',
                    time: '',
                    quote_type: '',
                    bid: '',
                    mid: '',
                    ask: '',
                    spread: '',
                    text: '',
                    source: ''
                }
            };
        },

        created() {
            this.fetchCurrencyList();
        },

        methods: {
            fetchCurrencyList() {
                axios.get('/api/rates').then((res) => {
                    this.rates = res.data;
                });
            },
            filterByQuoteCurrency(){
                if(!this.search){
                    this.fetchCurrencyList();
                    return;
                }
                axios.get('/api/rate/' + this.search).then((res) => {
                    this.rates = res.data;
                });
            }
        }
    }
</script>