<template>
  <b-container fluid class="px-0">
    <!-- User Interface controls -->
    <b-row>
      <b-col sm="5" md="5" class="my-1">
        <b-form-group
          label="Per page"
          label-for="per-page-select"
          label-cols-sm="2"
          label-cols-md="2"
          label-cols-lg="2"
          label-align-sm="right"
          label-size="sm"
          class="mb-0"
        >
          <b-form-select
            id="per-page-select"
            v-model="perPage"
            :options="pageOptions"
            size="sm"
            class="col-lg-2 col-md-2"
          ></b-form-select>
        </b-form-group>
      </b-col>

      <b-col lg="7" class="my-1">
        <b-form-group
          label-for="filter-input"
          label-cols-sm="3"
          label-align-sm="right"
          label-size="sm"
          class="mb-0"
        >
          <b-input-group size="sm">
            <b-form-input
              id="filter-input"
              v-model="filter"
              type="search"
              placeholder="Type to Search"
            ></b-form-input>

            <b-input-group-append>
              <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
            </b-input-group-append>
          </b-input-group>
        </b-form-group>
      </b-col>


    </b-row>

    <!-- Main table element -->
    <b-table
      :items="myProvider"
      :fields="fields"
      :current-page="currentPage"
      :per-page="perPage"
      :filter="filter"
      :filter-included-fields="filterOn"
      :sort-by.sync="sortBy"
      :sort-desc.sync="sortDesc"
      :sort-direction="sortDirection"
      stacked="md"
      show-empty
      small
      @filtered="onFiltered"
      outlined
    >
      <template #cell(show_details)="row">
        <a href="#" @click.prevent="row.toggleDetails">
          <i class="fas fa-fw fa-plus-circle fa-md"></i>
        </a>
      </template>
      <template #row-details="row">
        <b-card>
          <b-row class="mb-2">
            <b-col sm="2" class="text-sm-right"><b>Address:</b></b-col>
            <b-col>{{ address(row.item.permanent_address) }}</b-col>
          </b-row>
        </b-card>
      </template>
      <template #cell(action)="row">
        <a :href="`profile/${row.item.id}/edit`" >
          <i class="fas fa-fw fa-pen-square fa-lg"></i>
        </a>
      </template>
    </b-table>

    <!-- Info modal -->
    <b-row align-h="end">
      <b-col sm="7" md="6" class="my-1">
        <b-pagination
          v-model="currentPage"
          :total-rows="totalRows"
          :per-page="perPage"
          align="fill"
          size="sm"
          class="my-0"
        ></b-pagination>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
  export default {
    data() {
      return {
        isBusy: false,
        fields: [
          { key: 'show_details', label: 'Show', sortable: true, sortDirection: 'desc', class: 'text-center' },
          { key: 'last_name', label: 'Last Name', sortable: true, sortDirection: 'desc', class: 'text-center' },
          { key: 'first_name', label: 'First Name', sortable: true, sortDirection: 'desc', class: 'text-center' },
          { key: 'middle_name', label: 'Middle Initial',
          formatter: (value, key, item) => { return String(value)[0]}, sortable: true, sortDirection: 'desc', class: 'text-center' },
          { key: 'gender', label: 'Gender', sortable: true, sortDirection: 'desc' },
          { key: 'dob', label: 'Age', sortable: true, sortDirection: 'desc', class: 'text-center',
            formatter: ( dob ) => {
              return Math.floor((new Date() - new Date(dob).getTime()) / 3.15576e+10)
            }
          },
          { key: 'eligibilities', label: 'Eligibility', sortable: true, class: 'text-center',
            formatter: (cert)  => {
              return cert[0].eligibility
            }
          },
          { key: 'action', label: 'Action', sortable: true, sortDirection: 'desc', class: 'text-center' }
        ],
        totalRows: 1,
        currentPage: 1,
        perPage: 10,
        pageOptions: [ 10, 15, { value: 100, text: "Show a lot" }],
        sortBy: '',
        sortDesc: false,
        sortDirection: 'asc',
        filter: null,
        filterOn: [],
        infoModal: {
          id: 'info-modal',
          title: '',
          content: ''
        }
      }
    },
    computed: {
      sortOptions() {
        // Create an options list from our fields
        return this.fields
          .filter(f => f.sortable)
          .map(f => {
            return { text: f.label, value: f.key }
          })
      }
    },
    methods: {
      address(address) {
        return Object.values(address[0]).slice(5,9).join(' ,')
      },
      info(item, index, button) {
        this.infoModal.title = `Row index: ${index}`
        this.infoModal.content = JSON.stringify(item, null, 2)
        this.$root.$emit('bv::show::modal', this.infoModal.id, button)
      },
      resetInfoModal() {
        this.infoModal.title = ''
        this.infoModal.content = ''
      },
      onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      },
      async myProvider (ctx) {
          this.isBusy = true
          try {
            const response = await axios.get(`/profiles`)
            this.isBusy = false
            return response.data
          } catch (error) {
            this.isBusy = false
            return []
          }
        }
    }
  }
</script>

<style>
  [data-label="Gender"] {
    text-transform: capitalize;
  }
</style>