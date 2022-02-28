<template>
  <div class="card">
  <div class="card-header pb-0">
    <h6>Offers overview</h6>
    <p class="text-sm">
      <i class="fa fa-arrow-down text-success"></i>
      Filtering is improved soon.
    </p>


    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 ">
        <!-- is comming soon
        <span>
          <label for="filterCity" class="form-control-label">Filter City:</label>
          <input type="text" class="form-control" id="filterCity"
                 placeholder="Filter by City"
                 aria-label="filterCity" aria-describedby="Filter by City"
                 v-model="filterCity" @change="filterChanged"
          >
          -->
        </span>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 ">
        <span>
          <label for="filterAmount" class="form-control-label">Number of people:</label>
          <input type="number" class="form-control" id="filterAmount"
                 placeholder="Minimum number of persons" min=1
                 aria-label="filterAmount" aria-describedby="Filter Minimum number of persons"
                 v-model="filterAmount" @change="filterChanged"
          >
        </span>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 ">
        <span>
          <label for="filterAvailableTill" class="form-control-label">Available till:</label>
          <input type="date" class="form-control" id="filterAvailableTill"
                 placeholder="Place is min available till"
                 aria-label="filterAvailableTill" aria-describedby="Filter available till"
                 v-model="filterAvailableTill" @change="filterChanged"
          >
        </span>
      </div>
    </div>

  </div>

  <div class="card-body p-3">
    <ul class="list-group">
      <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg " v-for="item in list"
          :key="item.id">
        <div class="d-flex flex-column">
          <h6 class="mb-3 text-sm">{{ item.title }}</h6>
          <span class="mb-2 text-xs">Provider: <span
              class="text-dark font-weight-bold ms-2">{{ item.user.first_name }}</span></span>
          <span class="mb-2 text-xs">max Persons: <span
              class="text-dark ms-2 font-weight-bold">{{ item.amount }}</span></span>
          <span class="mb-2 text-xs">providing till: <span class="text-dark ms-2 font-weight-bold">{{
              item.offerEndsAt
            }}</span></span>
          <span class="text-xs">Location: <span class="text-dark ms-2 font-weight-bold">{{ item.postcode }}</span></span>

          <span class="text-xs">
        <a v-bind:href="'/offer/'+ item.id" class="btn bg-gradient-primary btn-sm mb-0" type="button">
          <i class="fa fa-solid fa-eye"></i> show
        </a>
        </span>
        </div>
        <div class="ms-auto">
          <img src="https://via.placeholder.com/150"></img>
        </div>
      </li>
      <infinite-loading :distance="1" @infinite="infiniteHandler" :identifier="infiniteId" ></infinite-loading>
    </ul>
  </div>

  </div>

</template>

<script>
export default {

  data() {
    return {
      list: [],
      page: 1,
      sort: '0',
      infiniteId: 0,
      filterCity: '',
      filterAmount: 1,
      filterAvailableTill: '',
    };
  },
  methods: {
    infiniteHandler($state) {
      axios.get('/api/offer', {
        params: {
          page: this.page,
          filterCity: this.filterCity,
          filterAmount: this.filterAmount,
          filterAvailableTill: this.filterAvailableTill,
        },
      })
      .then(({data}) => {
        if (data.data.length) {
          this.page += 1;
          this.list.push(...data.data);
          $state.loaded();
        } else {
          $state.complete();
        }
      });
    },
    filterChanged(){
      //TODO: restart infiniteHandler
      console.log('sort value:' + this.sort);
      console.log('filterCity value:' + this.filterCity);
      console.log('filterAmount value:' + this.filterAmount);
      console.log('filterAvailableTill value:' + this.filterAvailableTill);

      this.page = 1
      this.list = []

      console.log('Page:' + this.page);
      // as said in the documentation
      // "The infinite loading component will
      // reset itself whenever the identifier property has changed"
      this.infiniteId += 1
    }
  },
}
</script>