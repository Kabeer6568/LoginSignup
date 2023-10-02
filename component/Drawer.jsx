import React from 'react'
import {
    Button,Text
} from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { useNavigation } from '@react-navigation/native';
import { createDrawerNavigator } from '@react-navigation/drawer';
import {MainNavigation} from './Stack'
import Home from '../screens/Home';
import About from '../screens/About';
import Contact from '../screens/Contact';
import {TabsNavigation,TabsContact} from './Tabs';
// import StackNavigation from './Stack';

const Drawer = createDrawerNavigator();



const DrawerAction = ()=>{
    return(
    
    
        <Drawer.Navigator>
             <Drawer.Screen name="Home" component={TabsNavigation} />
             
             <Drawer.Screen name="Contact" component={TabsContact} />
             
             
           </Drawer.Navigator>

       
    
    )
}

export default DrawerAction
