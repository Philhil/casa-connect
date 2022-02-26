<template>

  <ul class="list-group">
    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg " v-for="item in list"
        :key="item.id">
      <div class="d-flex flex-column">
        <h6 class="mb-3 text-sm">{{ item.title }}</h6>
        <span class="mb-2 text-xs">Provider: <span
            class="text-dark font-weight-bold ms-2">Vorname Nachname</span></span>
        <span class="mb-2 text-xs">max Persons: <span class="text-dark ms-2 font-weight-bold">{{item.amount}}</span></span>
        <span class="mb-2 text-xs">providing till: <span class="text-dark ms-2 font-weight-bold">{{
            item.offerEndsAt
          }}</span></span>
        <span class="text-xs">Location: <span class="text-dark ms-2 font-weight-bold">{{ item.postcode }}</span></span>
      </div>
      <div class="ms-auto">
        <img src="https://via.placeholder.com/150"></img>
      </div>
    </li>
    <infinite-loading :distance="1" @infinite="infiniteHandler"></infinite-loading>
  </ul>

</template>

<script>
export default {

  data() {
    return {
      list: [],
      page: 1,
    };
  },
  methods: {
    infiniteHandler($state) {
      axios.get('/api/offer', {
        params: {
          page: this.page,
        },
      })
          .then(({ data }) => {
            console.log(data.data);
            if (data.data.length) {
              this.page += 1;
              this.list.push(...data.data);
              $state.loaded();
            } else {
              $state.complete();
            }
          });
    },
  },
}
</script>