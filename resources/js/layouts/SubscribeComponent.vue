<template>
  <v-footer>
    <v-container grid-list-lg>
      <v-layout row justify-center wrap>
        <v-flex xs12 sm12 md6>
          <div>
            <v-card-title primary-title>
              <div>
                <v-flex xs12 class="text-xs-center display-2 font-weight-black">Get Updates & More</v-flex>
                <v-flex xs12 class="text-xs-center display-2 font-weight-thin">Thoughtful thoughts to your inbox</v-flex>
              </div>
            </v-card-title>
          </div>
        </v-flex>

        <v-flex xs12 sm12 md5>
          <div>
            <v-card-title primary-title>
              <div>
                <v-row>
                  <v-col cols="12" sm="6" md="8">
                    <v-text-field label="Your Email" solo></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-btn large color="#EF7337">SUBSCRIBE</v-btn>
                  </v-col>
                </v-row>
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
  name: "SubscribeComponent"
};
</script>