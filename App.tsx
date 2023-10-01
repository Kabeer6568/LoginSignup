import 'react-native-gesture-handler';
import React from 'react';
import type {PropsWithChildren} from 'react';
import {
  SafeAreaView,
  ScrollView,
  StatusBar,
  StyleSheet,
  Text,
  Button,
  useColorScheme,
  View,
} from 'react-native';

import {
  Colors,
  DebugInstructions,
  Header,
  LearnMoreLinks,
  ReloadInstructions,
} from 'react-native/Libraries/NewAppScreen';
import DrawerComp from './component/Drawer';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { createDrawerNavigator } from '@react-navigation/drawer';

const Drawer = createDrawerNavigator();


import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';

const Tab = createBottomTabNavigator();



import Home from './screens/Home';
import About from './screens/About';
import Example from './screens/Example';

const Stack = createNativeStackNavigator();

function App(): JSX.Element {
  

  return (
    <NavigationContainer >
      
      {/* <Drawer.Navigator>
      <Drawer.Screen name="Home" component={Home} />
      <Drawer.Screen name="About" component={About} />
      <Drawer.Screen name="Example" component={Example} />
    </Drawer.Navigator> */}

    <Tab.Navigator screenOptions={{
     headerLeft: ()=><DrawerComp />
    }}>
      <Tab.Screen name="Home" component={Home} />
      <Tab.Screen name="About" component={About} />
      <Tab.Screen name="Example" component={Example} />
    </Tab.Navigator>
    </NavigationContainer>
  );
}


export default App;
