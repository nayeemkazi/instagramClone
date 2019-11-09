<template>
  <div>
    <button class="btn btn-primary" style="height: 20%" @click="followUser" v-text="buttonText"></button>
  </div>
</template>

<script>
export default {
  props: ["userId", "follows"],

  mounted() {
    console.log("Component mounted.");
    console.log(this.status);
  },

  date: function() {
    return {
      status: this.follows
    };
  },

  methods: {
    followUser() {
      axios
        .post("/follow/" + this.userId)
        .then(response => {
          // this.buttonText();
          console.log(this.status);
          this.status = !this.status;
          console.log(response.data);
        })
        .catch(err => {
          if (err.response.status == 401) {
            window.location = "/login";
          }
        });
    }
  },

  computed: {
    buttonText() {
      return this.status ? "Unfollow" : "Follow";
    }
  }
};
</script>
