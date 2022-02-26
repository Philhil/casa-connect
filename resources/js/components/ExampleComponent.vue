<template>
  <div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <h1>EXAMPLE</h1>

        <div
            class="offer"
            v-for="item in list" :key="item.id"
        >
          <div class="offer-details">
            <h2 class="offer-name">
              {{ item.title }}
            </h2>
            <ul>
              <li><strong>Location:</strong> {{ item.postcode }}, {{ item.country }}</li>
            </ul>
          </div>
        </div>
        <infinite-loading :distance="1" @infinite="infiniteHandler"></infinite-loading>

      </div>
    </div>
  </div>
</template>

<style>
.offer {
  display: flex;
  background: #ccc;
  border-radius: 1em;
  margin: 1em auto;
}

.offer-details {
  padding: 1em;
}

.offer-name {
  margin: 0;
  padding: 0;
  font-size: 2rem;
  font-weight: 900;
}
</style>

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