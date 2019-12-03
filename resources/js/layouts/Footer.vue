<template>
  <v-footer class="white">
    <v-container grid-list-lg>
      <v-layout row wrap>
        <v-flex xs12 sm12 md4>
          <div>
            <v-card-title primary-title>
              <div>
                <h3 class="headline font-weight-black">NEED HELP ?</h3>
                <v-divider></v-divider>
                <h4 class="font-weight-light">Call Us:</h4>
                <h5 class="font-weight-black">+254 712 345678</h5>
                <h4 class="font-weight-light">Email Us:</h4>
                <h5 class="font-weight-black">hello@bookafrica.com</h5>
                <h4 class="font-weight-light">Follow Us:</h4>
              </div>
            </v-card-title>
          </div>
        </v-flex>

        <v-flex xs12 sm12 md4>
          <div>
            <v-card-title primary-title>
              <div>
                <h3 class="headline mb-0 font-weight-black">COMPANY</h3>
                <v-divider></v-divider>
                <h4 class="font-weight-light">About Us</h4>
                <h4 class="font-weight-light">Work with Us</h4>
                <h4 class="font-weight-light">Meet the Team</h4>
              </div>
            </v-card-title>
          </div>
        </v-flex>

        <v-flex xs12 sm12 md4>
          <div>
            <v-card-title primary-title>
              <div>
                <h3 class="headline mb-0 font-weight-black">SUPPORT</h3>
                <v-divider></v-divider>
                <h4 class="font-weight-light">Contact Us</h4>
                <h4 class="font-weight-light">Privacy Policy</h4>
              </div>
            </v-card-title>
          </div>
        </v-flex>
      </v-layout>
    </v-container>
  </v-footer>
</template>

<script>
export default {
  name: "FooterBar"
};
</script>