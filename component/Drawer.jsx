import React from 'react'
import {
    Button,
} from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createDrawerNavigator } from '@react-navigation/drawer';
import Home from '../screens/Home';
import About from '../screens/About';
import Example from '../screens/Example';

const Drawer = createDrawerNavigator();


const DrawerAction = ()=>{
    return(
    
    <NavigationContainer >
      
      <Drawer.Navigator>
      <Drawer.Screen name="Home" component={Home} />
      <Drawer.Screen name="About" component={About} />
      <Drawer.Screen name="Example" component={Example} />
    </Drawer.Navigator>

    </NavigationContainer >
    
    )
}

const DrawerBtn = (navigation)=>{
    navigation.toggleDrawer();
}

const DrawerComp = (navigation)=>{

    return(
        <Button title='Testing' onPress={()=>navigation.toggleDrawer()} />
    )
}

export default DrawerComp
