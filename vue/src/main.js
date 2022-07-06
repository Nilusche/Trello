import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import ApolloClient  from 'apollo-boost';
import { createApolloProvider } from '@vue/apollo-option'


const apolloClient = new ApolloClient({
  // You should use an absolute URL here
  uri: 'http://127.0.0.1:8000/graphql',
})

const apolloProvider = createApolloProvider({
  defaultClient: apolloClient,
})


createApp(App)
.use(router)
.use(apolloProvider)
.mount('#app')
