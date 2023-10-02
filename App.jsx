import 'react-native-gesture-handler';
import React from 'react';

import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

import Home from './screens/Home';
import About from './screens/About';
import Example from './screens/Example';
import DrawerAction from './component/Drawer';
import {StackNavigation,MainNavigation} from './component/Stack'
import TabsNavigation from './component/Tabs';

import { ScreenStackHeaderSearchBarView } from 'react-native-screens';

const Stack = createNativeStackNavigator();

const App = () => {
  

  return (
    <NavigationContainer >
      
      <DrawerAction />

    
    </NavigationContainer>
  );
}


export default App;
