#install.packages("R.utils")
#library(R.utils)


#Cr�ation des vecteurs diff�rents dans la liste Vecteurs
vecteurs = gener_vecteurs2()
#length(vecteurs)


#Application des fonctions aux vecteurs
list = gener_listes(vecteurs)
list_h = list$list_hor
list_v = list$list_ver
list_finale = list$list_final
#Apprendre le jeu aux neurones
#model =learn(list_finale)

#G�n�ration de question
question = gener_iq()
#Inverse IQ : v�rifie sur la reponse pr�dite est identique � la vraie reponse
#prediction = inverse_IQ(model, question)


#print(i/(m+i)*100)


# for(i in 1:length(vecteurs)){
#   for(j in 1:length(vecteurs)){
#     #print(j)
#     test_list[[c]] = as.numeric(list_ajout_h[[j]])+as.numeric(list_dep_h_v[[i]])
#     for(k in 1:81){
#       if(test_list[[c]][k] >= 1){
#         test_list[[c]][k] = 1
#       }
#     }
#     test_list[[c]] = matrix(test_list[[c]], nrow = 9, ncol = 9)
#     c=c+1
#   }
# }
# test_list <- unique(test_list)
# length(test_list)
# 
# longueur = length(test_list)
# for(i in 1:length(test_list)){
#   print(i)
#   if((sum(test_list[[i]][1,]==test_list[[i]][4,])==9) || sum(test_list[[i]][3,] == test_list[[i]][6,])==9){
#     test_list = test_list[-i]
#     i = i-1
#   }
# }
# 
# 
# ########FIN PROGRAMME #####
# for(i in 1:511){
#   for(j in 1:long){
#     #print(j)
#     test_list[[c]] =as.numeric(list_finale[[j]])+as.numeric(list_finale[[i]])
#     for(k in 1:81){
#       if(test_list[[c]][k] >= 1){
#         test_list[[c]][k] = 1
#       }
#     }
#     test_list[[c]] = matrix(test_list[[c]], nrow = 9, ncol = 9)
#     c=c+1
#   }
# }

#doublonstest<-which(duplicated(test_list))
#test_list<-test_list[-doublonstest]
# test_list <- unique(test_list)
# length(test_list)


#mat_motif = read.table("./V2/VecteurImpossible.txt")
#res = verif(mat_motif, list_finale)
#res
####################
